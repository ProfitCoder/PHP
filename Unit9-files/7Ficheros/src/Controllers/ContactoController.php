<?php

    declare(strict_types=1);

    namespace Controllers;

    use Models\Contacto;
    use Lib\Pages;
    use Request\ContactoRequest;

    class ContactoController
    {
        private Pages $pagina;

        public function __construct()
        {
            $this->pagina = new Pages();
        }

        public function mostrarFormulario()
        {
            $this->pagina->render('Contacto/formulario');
        }

        public function procesar(): void
        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $entrada = $_POST['contacto'] ?? [];
                $archivo = $_FILES['foto'] ?? [];

                $request = new ContactoRequest(
                    is_array($entrada) ? $entrada : [],
                    is_array($archivo) ? $archivo : []
                );

                $nombreFoto = '';

                $nombreFoto = $request->guardarFoto(
                    __DIR__ . '/../../public/images/'
                );

                // Comprobamos también si se ha producido un error al guardar.
                if ($request->esValido()) {
                    $datos = $request->datos();
                    $datos['foto'] = $nombreFoto;

                    $contacto = Contacto::fromArray($datos);

                    $directorio = __DIR__ . '/../../public/images/';
                    $imagenes = [];

                    if (is_dir($directorio)) {
                        $finfo = new \finfo(FILEINFO_MIME_TYPE);

                        foreach (scandir($directorio) as $archivo) {
                            $ruta = $directorio . $archivo;

                            if (is_file($ruta)) {
                                $mime = $finfo->file($ruta);

                                if (in_array($mime, ['image/jpeg', 'image/png', 'image/gif'], true)) {
                                    $imagenes[] = $archivo;
                                }
                            }
                        }
                    }

                    $this->pagina->render('Contacto/resultado', [
                        'contacto' => $contacto,
                        'imagenes' => $imagenes
                    ]);
                }
            } 
            else 
            {
                $this->mostrarFormulario();
            }
        }
    }
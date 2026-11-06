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

            if ($_SERVER['REQUEST_METHOD'] !== 'POST' && $_FILES(['foto']) != null) 
            {
                $this->mostrarFormulario();
            } 
                
            $entrada = $_POST['contacto'] ?? [];    
            $archivo = $_FILES['foto'] ?? [];

            $request = new ContactoRequest(
                is_array($entrada) ? $entrada : [],
                is_array($archivo) ? $archivo : []
            );

            if ($request->esValido()) {
                $nombreFoto = $request->guardarFoto(
                    __DIR__ . '/img/'
                );
            }

            if ($request->esValido()) 
            {
                
                $datos = $request->datos();
                $datos['foto'] = $nombreFoto;

                $contacto = Contacto::fromArray($datos);

                $this->pagina->render('Contacto/resultado');

            } 
            else 
            {
                $this->pagina->render('Contacto/formulario', [
                    'errores' => $request->errores()
                ]);
            }
        }
    }
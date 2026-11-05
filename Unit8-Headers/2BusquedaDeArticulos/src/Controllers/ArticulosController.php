<?php

    declare(strict_types=1);

    namespace Controllers;

    use Lib\Pages;
    use Models\Articulo;
    use Request\ArticuloRequest;

    class ArticulosController
    {
        private Pages $pagina;

        public function __construct()
        {
            $this->pagina = new Pages();
        }

        public function mostrarFormularioArticulo()
        {
            $this->pagina->render('Articulos/formularioArt',
            [
                'articulo' => new Articulo(),
                //Como no tenemos datos la primera vez, array va vacio
                'errores' => []
            ]);
        }

       public function procesarArticulo(): void
        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $entrada = $_POST['Articulo'] ?? [];

                $request = new ArticuloRequest(
                    is_array($entrada) ? $entrada : []
                );

                if (!$request->esValido()) {
                    http_response_code(400);

                    $this->pagina->render('Articulos/formularioArt', [
                        'articulo' => new Articulo(),
                        'errores' => $request->errores()
                    ]);
                } else {
                    $articulo = Articulo::fromArray($request->datos());

                    if ($articulo->buscarPorId($articulo->getId())) {
                        http_response_code(200);

                        $this->pagina->render('Articulos/resultadoArt', [
                            'articulo' => $articulo
                        ]);
                    } else {
                        http_response_code(404);

                        $this->pagina->render('error/error404');
                    }
                }
            } else {
                $this->mostrarFormularioArticulo();
            }
        }
    }
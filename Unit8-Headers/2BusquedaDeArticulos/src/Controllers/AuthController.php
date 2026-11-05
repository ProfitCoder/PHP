<?php

    declare(strict_types=1);

    namespace Controllers;

    use Lib\Pages;
    use Models\Usuario;
    use Request\UsuarioRequest;

    class AuthController
    {
        private Pages $pagina;

        public function __construct()
        {
            $this->pagina = new Pages();
        }

        public function mostrarFormularioUser()
        {
            $this->pagina->render('Usuario/formularioLog',
            [
                'usuario' => new Usuario(),
                //Como no tenemos datos la primera vez, array va vacio
                'errores' => []
            ]);
        }

        public function enviarPaginaBienvenida()
        {
            $this->pagina->render('Usuario/buenosdias');
        }

        public function procesarUser(): void
        {
            if($_SERVER['REQUEST_METHOD'] !== 'POST') 
            {
                $this->mostrarFormularioUser();
                return;
            }

            

            $entrada = $_POST['Usuario'] ?? [];
            $request = new UsuarioRequest(is_array($entrada) ? $entrada : []);

            if (!$request->esValido()) {
                $this->pagina->render('Usuario/formularioLog', [
                    'usuario' => Usuario::fromArray($request->datos()),
                    'errores' => $request->errores()
                ]);

                return;
            }    


            

            $usuarioValido = [
                'nombre' => 'Usuario',
                'clave' => password_hash('Pasa1',PASSWORD_BCRYPT)
            ];

            $comprobacionNombre = ($usuarioValido['nombre'] === $_POST ['Usuario']['nombre']);
            $comprobacionClave = (password_verify($_POST ['Usuario']['password'],$usuarioValido['clave']) === true);

            if($comprobacionNombre && $comprobacionClave)
            { 
                header('Location: index.php?controller=Auth&action=enviarPaginaBienvenida');
                exit;
            }

            $this->pagina->render('Usuario/formularioLog', [
                'usuario' => Usuario::fromArray($request->datos()),
                'errores' => [
                    'password' => 'Usuario o contraseña incorrectos.'
                ]
            ]);

            return;
        }
    }
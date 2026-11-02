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
            $this->pagina->render('Usuario/formularioLog');
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
            else
            {
                
            }

            $usuarioValido = [
                'nombre' => 'Usuario',
                'clave' => password_hash('1234',PASSWORD_BCRYPT)
            ];

            $comprobacionNombre = ($usuarioValido['nombre'] === $_POST ['Usuario']['nombre']);
            $comprobacionClave = (password_verify($_POST ['Usuario']['password'],$usuarioValido['clave']) === true);

            if($comprobacionNombre && $comprobacionClave)
            {
                header('Location: index.php?controller=Auth&action=enviarPaginaBienvenida');
                exit;
            }
            else
            {
                $this -> mostrarFormularioUser();
            }
            

            //Meter asi los datos es peligrosisimo
            $usuario = Usuario::fromArray($_POST['usuario'] ?? []);

            $this -> pagina -> render('Usuario/resultUser', [
                'nombre' => $usuario->getNombre()
            ]);
        }
    }
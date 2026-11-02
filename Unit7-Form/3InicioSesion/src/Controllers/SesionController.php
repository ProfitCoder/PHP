<?php
    declare(strict_types=1);

    namespace Controllers;

    use Lib\Pages;
    use Lib\Request;

    class SesionController
    {
        private Pages $pages;

        public function __construct()
        {
            $this->pages = new Pages();
        }

        public function formulario(): void
        {
            $this->pages->render('Sesion/formulario');
        }

        public function recibir(): void
        {
            if (!Request::esPost()) {
                header('Location: index.php');
                exit;
            }

            header('Cache-Control: no-store');
            $usuario = Request::texto('usuario');
            $clave = Request::texto('clave');
            $estadoUsuario = $this->estado('usuario', $usuario);
            $estadoClave = $this->estado('clave', $clave);
            $completo = $estadoUsuario === 'Recibido' && $estadoClave === 'Recibido';
            
            $this->pages->render('Sesion/resultado', [
                'usuario' => $usuario ?? '',
                'estadoUsuario' => $estadoUsuario,
                'estadoClave' => $estadoClave,
                'completo' => $completo
            ]);
        }

        private function estado(string $campo, ?string $valor): string
        {
            if (!Request::contiene($campo)) {
                return 'No enviado';
            }
            if ($valor === null) {
                return 'Formato incorrecto';
            }
            if (trim($valor) === '') {
                return 'Enviado vacío';
            }
            return 'Recibido';
        }
    }

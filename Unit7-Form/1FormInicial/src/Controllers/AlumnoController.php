<?php   
    declare(strict_types=1);

    namespace Controllers;

    use Models\Alumno;
    use Lib\Pages;

    class AlumnoController
    {
        
        private Pages $pages;

        public function __construct()
        {
            $this -> pages = new Pages();

        }

        public function mostrarAlumno(?string $alumnoRec = null): void
        {
            if($alumnoRec === null)
            {
                $alumnoM = new Alumno("Juan","Mendez Nuñez",7.5,2007);
            }

            $this->pages->render('Alumno/mostrarAlumno',[
                'nombreCompleto' => $alumnoM->nombreCompleto(),
                'edad' => $alumnoM->getEdad()
            ]);
        }

        public function alta(): void
        {
            $this->pages->render('Alumno/alta');
        }

        public function procesar(): void
        {
            $datos = [
                'nombre' => $_POST['nombre'] ?? '',
                'apellidos' => $_POST['apellidos'] ?? '',
                'fecha' => $_POST['fecha'] ?? '',
                'correo' => $_POST['correo'] ?? '',
                'lenguajes' => $_POST['lenguajes'] ?? [],
                'web' => $_POST['web'] ?? '',
                'comentarios' => $_POST['comentarios'] ?? '',
                'color' => $_POST['color'] ?? '',
                'numero' => $_POST['numero'] ?? '',
                'coinciden' => ($_POST['clave'] ?? '') === ($_POST['repetir'] ?? '')
            ];

            $this->pages->render('Alumno/resultado', $datos);
        }

    }   
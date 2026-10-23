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

    }   
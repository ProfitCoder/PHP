<?php
    declare(strict_types=1);

    namespace Models;

    class Alumno
    {

        private int $id;

        public function __construct(
            private string $nombre = "",
            private string $apellidos = '',
            private float $nota = 0.0,
            private int $datey = 0
        )
        {
            $this -> id = 1;
        }

        public function getNombre(): string
        {
            return $this -> nombre;
        }

        public function getApellidos(): string
        {
            return $this -> apellidos;
        }

        //getters por construir

        public function setNombre(string $nombreAlumno): void
        {
            $this -> nombre = $nombreAlumno;
        }

        public function setApellidos(string $apellidosAlumno): void
        {
            $this -> apellidos = $apellidosAlumno;
        }

        public function setEdad(int $edadIntro): void
        {
            $this -> datey = $edadIntro;
        }

        //setters por construi
        
        //Calcular edad
        public function getEdad(): int
        {
            return $edadAlumn = (int)date('Y') - $this-> datey;
        }

        //Devolver nombre completo
        public function nombreCompleto(): string
        {
            return $nombreComp = ($this -> nombre) . " " . ($this -> apellidos);
        }
    }
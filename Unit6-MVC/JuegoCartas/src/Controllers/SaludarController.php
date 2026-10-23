<?php
    declare(strict_types=1);

    namespace Controllers;

    use Lib\Pages;

    class SaludarController
    {
        private Pages $pages;

        public function __construct()
        {
            $this -> pages = new Pages();
        }

        public function Bienvenido(): void
        {
            $this->pages -> render('Saludar/Bienvenida');
        }
    }
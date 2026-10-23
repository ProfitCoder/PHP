<?php
declare(strict_types=1);

namespace Controllers;

use Lib\Pages;
use Models\Baraja;
use Models\Carta;

class BarajaController
{
    private Pages $pages;
    private Baraja $baraja;

    public function __construct()
    {
        $this->pages = new Pages();
        $this->baraja = new Baraja();
    }

    public function muestraBaraja(): void
    {
        $this->mostrarCartas($this->baraja->getCartas(), 'Baraja completa');
    }

    public function barajar(): void
    {
        $this->baraja->barajar();
        $this->mostrarCartas($this->baraja->getCartas(), 'Baraja mezclada');
    }

    private function mostrarCartas(array $cartas, string $titulo): void
    {
        $this->pages->render('baraja/muestraBaraja',[
        'cartas' => $cartas,
        'titulo' => $titulo,
        ]);
    }

    public function inicio(): void
    {
        $this->pages->render('Layout/inicio');
    }

}
    
    
    
    
    
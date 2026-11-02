<?php

namespace Controllers;

use Lib\Pages;
use Models\AutorRepositorio;
use Models\LibroRepositorio;

class BibliotecaController
{
    private Pages $pages;
    private AutorRepositorio $autorRepositorio;
    private LibroRepositorio $libroRepositorio;

    public function __construct()
    {
        $this->pages = new Pages();
        $this->autorRepositorio = new AutorRepositorio();
        $this->libroRepositorio = new LibroRepositorio();
    }

    public function inicio(): void { 
        $this->pages->render('Layout/inicio'); 
    }

    public function libros(): void
    {
        $this->pages->render('biblioteca/libros', [
            'libros' => $this->libroRepositorio->obtenerTodos(),
            'autorRepositorio' => $this->autorRepositorio,
            'titulo' => 'Todos los libros'
        ]);
    }

    public function libro(): void
    {
        $id = (int) ($_GET['id'] ?? 0);
        $libro = $this->libroRepositorio->buscarPorId($id);
        if ($libro === null) { ErrorController::show_error404(); return; }
        $autor = $this->autorRepositorio->buscarPorId($libro->getAutorId());
        $this->pages->render('biblioteca/libro', ['libro' => $libro, 'autor' => $autor]);
    }

    public function autor(): void
    {
        $id = (int) ($_GET['id'] ?? 0);
        $autor = $this->autorRepositorio->buscarPorId($id);
        if ($autor === null) { ErrorController::show_error404(); return; }
        $libros = $this->libroRepositorio->buscarPorAutor($autor->getId());
        $this->pages->render('biblioteca/autor', ['autor' => $autor, 'libros' => $libros]);
    }

    public function disponibles(): void
    {
        $this->pages->render('biblioteca/libros', [
            'libros' => $this->libroRepositorio->obtenerDisponibles(),
            'autorRepositorio' => $this->autorRepositorio,
            'titulo' => 'Libros disponibles'
        ]);
    }
}

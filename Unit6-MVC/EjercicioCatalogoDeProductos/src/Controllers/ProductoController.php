<?php

namespace Controllers;

use Lib\Pages;
use Models\ProductoRepositorio;

class ProductoController
{
    public function index()
    {
        $repositorio = new ProductoRepositorio();
        $productos = $repositorio->obtenerTodos();

        $pagina = new Pages();
        $pagina->render("productos/listado", array(
            "productos" => $productos
        ));
    }
}
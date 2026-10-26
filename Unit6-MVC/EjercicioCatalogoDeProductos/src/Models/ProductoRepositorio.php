<?php
    declare(strict_types=1);

    namespace Models;

    use Models\Producto;

    class ProductoRepositorio
    {


        public function obtenerTodos()
        {
            $productos = array(
                array("id" => 1, "nombre" => "Teclado", "precio" => 25, "stock" => 10),
                array("id" => 2, "nombre" => "Ratón", "precio" => 15, "stock" => 8),
                array("id" => 3, "nombre" => "Monitor", "precio" => 150, "stock" => 4),
                array("id" => 4, "nombre" => "Auriculares", "precio" => 35, "stock" => 0),
                array("id" => 5, "nombre" => "Altavoces", "precio" => 40, "stock" => 6),
                array("id" => 6, "nombre" => "Webcam", "precio" => 30, "stock" => 3)
            );

            $listaProductos = array();

            foreach ($productos as $producto) {
                $listaProductos[] = new Producto(
                    $producto["id"],
                    $producto["nombre"],
                    $producto["precio"],
                    $producto["stock"]
                );
            }

            return $listaProductos;
        }
    }
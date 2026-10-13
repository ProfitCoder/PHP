<?php
    abstract class FiguraGeometrica{
        //Definicion de constructor

        public function __construct(
            protected string $nombre
        )
        {}

        //Definicion de metodos
        public function calcularArea():void{}

        public function mostrarNombre():void{}

    }
<?php

function obtenerFechaCastellano(): string
{
    date_default_timezone_set('Europe/Madrid');

    $dias = [
        'Domingo', 'Lunes', 'Martes', 'Miércoles',
        'Jueves', 'Viernes', 'Sábado'
    ];

    $meses = [
        1 => 'Enero', 'Febrero', 'Marzo', 'Abril',
        'Mayo', 'Junio', 'Julio', 'Agosto',
        'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    ];

    //Dia de la semana
    $diaSemana = $dias[(int) date('w')];
    //Dia del mes sin 0
    $dia = date('j');
    //Nº de mes
    $mes = $meses[(int) date('n')];
    //Año
    $anio = date('Y');

    return "$diaSemana, $dia de $mes de $anio";
}
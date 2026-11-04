<?php
    declare(strict_types=1);

    $fichero = 'Tarea 1.- Constuyendo tu primer sitio web (1).pdf';

    if(file_exists($fichero))
    {
        header('Content-Type: application/pdf');

        header('Content-Disposition: attachment; filename="informe_anual_2027.pdf"');
        header('Content-Length:' . filesize($fichero));

        readfile($fichero);

        exit;
    }
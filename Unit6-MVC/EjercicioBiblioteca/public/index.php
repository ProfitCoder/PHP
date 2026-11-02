<?php

declare(strict_types=1);

require __DIR__ . '/../autoloader.php';
require __DIR__ . '/../config/config.php';

use Controllers\FrontController;

// Indicamos qué controlador utilizar
$_GET['controller'] = 'Biblioteca';

// Convertimos "accion" en "action"
$_GET['action'] = $_GET['accion'] ?? 'inicio';

FrontController::main();
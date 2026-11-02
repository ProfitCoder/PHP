<?php
declare(strict_types=1);
namespace Controllers;
class FrontController
{
    public static function main(): void
    {
        $controller = $_GET['controller'] ?? CONTROLLER_DEFAULT;
        $action = $_GET['action'] ?? ACTION_DEFAULT;
        if ($controller !== 'Spam' || !in_array($action, ['formulario', 'procesar'], true)) {
            http_response_code(404);
            echo 'Página no encontrada';
            return;
        }
        (new SpamController())->$action();
    }
}

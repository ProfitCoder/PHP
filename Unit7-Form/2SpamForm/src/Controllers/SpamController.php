<?php
declare(strict_types=1);
namespace Controllers;
use Lib\Pages;
use Lib\Request;
use Models\Persona;
class SpamController
{
    private Pages $pages;
    public function __construct()
    {
        $this->pages = new Pages();
    }
    public function formulario(): void
    {
        $this->pages->render('Spam/formulario', [
            'errores' => [], 'nombre' => '', 'telefono' => '', 'correo' => ''
        ]);
    }
    public function procesar(): void
    {
        if (!Request::esPost()) {
            header('Location: index.php');
            exit;
        }
        $nombre = Request::post('nombre');
        $telefono = Request::post('telefono');
        $correo = Request::post('correo');
        $errores = [];
        if ($nombre === '') {
            $errores[] = 'Introduce el nombre.';
        }
        if ($telefono === '') {
            $errores[] = 'Introduce el teléfono.';
        }
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores[] = 'Introduce un correo electrónico válido.';
        }
        if ($errores !== []) {
            http_response_code(422);
            $this->pages->render('Spam/formulario', compact('errores', 'nombre', 'telefono', 'correo'));
            return;
        }
        $persona = new Persona($nombre, $telefono, $correo);
        $this->pages->render('Spam/resultado', ['mensaje' => $persona->mensaje()]);
    }
}

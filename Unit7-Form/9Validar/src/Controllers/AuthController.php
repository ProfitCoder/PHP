<?php
declare(strict_types=1);
namespace Controllers;

use Lib\Pages;
use Models\Usuario;
use Request\UsuarioRequest;

class AuthController
{
    private Pages $pagina;

    public function __construct() { $this->pagina = new Pages(); }

    public function mostrarFormularioUser(): void
    {
        $this->pagina->render('Usuario/formularioLog', [
            'usuario' => new Usuario(), 
            'errores' => []
        ]);
    }

    public function procesarUser(): void
    {
        if($_SERVER['REQUEST_METHOD'] !== 'POST') 
        {
            $this->mostrarFormularioUser();
            return;    
        }

        $entrada = $_POST['Usuario'] ?? [];
        $request = new UsuarioRequest(is_array($entrada) ? $entrada : []);
        $usuario = Usuario::fromArray($request->datos());

        if ($request->esValido()) 
        {
            $this->pagina->render('Usuario/resultUser', ['usuario' => $usuario]);
        } 
        else 
        {
            $this->pagina->render('Usuario/formularioLog', [
                'usuario' => $usuario,
                'errores' => $request->errores()
            ]);
        }
    }
}

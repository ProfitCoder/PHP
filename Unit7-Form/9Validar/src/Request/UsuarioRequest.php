<?php
declare(strict_types=1);
namespace Request;

final class UsuarioRequest
{
    public const SITUACIONES = ['sin empleo', 'media jornada', 'tiempo completo'];
    public const LENGUAJES = ['Python', 'PHP', 'JavaScript', 'Java', 'C++'];

    private array $datos = [];
    private array $errores = [];

    public function __construct(array $entrada)
    {
        $this->sanear($entrada);
        $this->validar();
    }

    public function esValido(): bool 
    { 
        return $this->errores === []; 
    }

    public function errores(): array 
    { 
        return $this->errores; 
    }

    public function datos(): array 
    { 
        return $this->datos; 
    }

    private function sanear(array $entrada): void
    {
        $campos = ['nombre', 'apellidos', 'correo', 'telefono', 'situacion', 'url'];

        foreach ($campos as $campo)
        {
            $valor = $entrada[$campo] ?? '';

            if (is_string($valor))
            {
                if ($campo === 'nombre' || $campo === 'apellidos')
                {
                    $valor = strip_tags($valor);
                }

                $this->datos[$campo] = trim($valor);
            }
            else
            {
                $this->datos[$campo] = '';
                $this->errores[$campo] = 'El campo debe ser un texto.';
            }
        }

        $this->datos['lenguajes'] = [];
        $lenguajes = $entrada['lenguajes'] ?? [];

        if (is_array($lenguajes))
        {
            foreach ($lenguajes as $lenguaje)
            {
                if (in_array($lenguaje, self::LENGUAJES, true))
                {
                    $this->datos['lenguajes'][] = $lenguaje;
                }
                else
                {
                    $this->errores['lenguajes'] = 'Lenguaje no permitido.';
                }
            }
        }
        else
        {
            $this->errores['lenguajes'] = 'Los lenguajes deben ser un array.';
        }
    }

    private function validar(): void
    {
        $d = $this->datos;

        if (!preg_match("/^[\p{L} .'-]{2,50}$/u", $d['nombre']))
        {
            $this->errores['nombre'] = 'Nombre inválido: entre 2 y 50 caracteres, sin números.';
        }

        if (!preg_match("/^[\p{L} .'-]{2,100}$/u", $d['apellidos']))
        {
            $this->errores['apellidos'] = 'Apellidos inválidos: entre 2 y 100 caracteres, sin números.';
        }

        if (!filter_var($d['correo'], FILTER_VALIDATE_EMAIL))
        {
            $this->errores['correo'] = 'El correo no es válido.';
        }

        if (!preg_match('/^[0-9]{9}$/', $d['telefono']))
        {
            $this->errores['telefono'] = 'El teléfono debe tener 9 cifras.';
        }

        if (!in_array($d['situacion'], self::SITUACIONES, true))
        {
            $this->errores['situacion'] = 'Situación laboral no permitida.';
        }

        if (!filter_var($d['url'], FILTER_VALIDATE_URL))
        {
            $this->errores['url'] = 'La URL no es válida.';
        }
    }
}
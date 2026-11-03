<?php

namespace Controllers;

    use Lib\Pages;
    use Models\Calculadora;
    use Request\CalculadoraRequest;

    class CalculadoraController
    {
    
        private Pages $pagina;
        
        public function __construct()
        {
            $this->pagina = new Pages();
        }
        
        public function mostrarFormulario(): void
        {
            $this->pagina->render('Calculadora/formulario');
        }
        
        public function calcular(): void
        {
        
            if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') 
            {
                $this->mostrarFormulario();
                return;
            }
            
            $request = new CalculadoraRequest($_POST);
            
            if (!$request->esValido()) 
            {
            
                $this->pagina->render('Calculadora/resultado', [
                    'mensaje' => 'Introduce dos números y selecciona una operación.'
                ]);
                return;
            
                }
            
            $datos = $request->datos();
            $numero1 = (float) $datos['numero1'];
            $numero2 = (float) $datos['numero2'];
            $operacion = $datos['operacion'];
            
            if ($operacion === 'dividir' && $numero2 == 0) 
            {
                $mensaje = 'No se puede dividir entre cero.';
            } 
            else 
            {
                $calculadora = new Calculadora();
                $resultado = $calculadora->calcular($numero1, $numero2, $operacion);
                $mensaje = 'Resultado: ' . $resultado;
            }
            
            $this->pagina->render('Calculadora/resultado', ['mensaje' => $mensaje]);
        }
    }

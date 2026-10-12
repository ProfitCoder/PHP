<?php
    class cuenta{
        
        public function __construct(
            private float $saldo{
                set{
                    if($value >= 0)
                    {
                        $this -> saldo = $value;
                    }
                    else
                    {
                        throw new Exception("El valor tiene que ser positivo.");
                    }
                }
            },

            private string $titular{
                set {
                    $this->titular = ucwords(trim($value));
                }
            }
            )
        {}

        public string $saldoFormateado {
            get => number_format($this->saldo, 2, ',', '.') . " €";
        }
    }
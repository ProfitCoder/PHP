<?php
namespace Models;
class Autor
{
    public function __construct(
        private int $id, 
        private string $nombre, 
        private string $nacionalidad
        ) 
    {}
    
    public function getId(): int 
    { 
        return $this->id; 
    }
    
    public function getNombre(): string 
    { 
        return $this->nombre; 
    }
    
    public function getNacionalidad(): string 
    { 
        return $this->nacionalidad; 
    }
}

<?php
namespace Models;
class Libro
{
    public function __construct(
        private int $id, 
        private string $titulo, 
        private int $anio, 
        private int $autorId,
        private bool $disponible
        ) 
        {}
    
    
    public function getId(): int 
    { 
        return $this->id; 
    }
    
    public function getTitulo(): string 
    { 
        return $this->titulo; 
    }
    
    public function getAnio(): int 
    { 
        return $this->anio; 
    }
    
    public function getAutorId(): int 
    { 
        return $this->autorId; 
    }
    
    public function getDisponible(): bool
    { 
        return $this->disponible; 
    }
}

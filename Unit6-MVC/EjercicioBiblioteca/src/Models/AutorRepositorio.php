<?php
namespace Models;
class AutorRepositorio
{
    private array $autores = [];
    public function __construct()
    {
        $this->autores = [
            new Autor(1, 'Miguel de Cervantes', 'Española'),
            new Autor(2, 'J. K. Rowling', 'Británica'),
            new Autor(3, 'Gabriel García Márquez', 'Colombiana')
        ];
    }
    
    public function obtenerTodos(): array 
    { 
        return $this->autores; 
    }
    
    public function buscarPorId(int $id): ?Autor
    {
        foreach ($this->autores as $autor) {
            if ($autor->getId() === $id) { return $autor; }
        }
        return null;
    }
}

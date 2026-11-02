<?php
namespace Models;
class LibroRepositorio
{
    private array $libros = [];
    
    public function __construct()
    {
        $this->libros = [
            new Libro(1, 'Don Quijote de la Mancha', 1605, 1, true),
            new Libro(2, 'Novelas ejemplares', 1613, 1, false),
            new Libro(3, 'La Galatea', 1585, 1, true),
            new Libro(4, 'Harry Potter y la piedra filosofal', 1997, 2, true),
            new Libro(5, 'Harry Potter y la cámara secreta', 1998, 2, false),
            new Libro(6, 'Harry Potter y el prisionero de Azkaban', 1999, 2, true),
            new Libro(7, 'Cien años de soledad', 1967, 3, true),
            new Libro(8, 'El amor en los tiempos del cólera', 1985, 3, false)
        ];
    }
    
    public function obtenerTodos(): array 
    { 
        return $this->libros; 
    }
    
    public function buscarPorId(int $id): ?Libro
    {
        foreach ($this->libros as $libro) {
            if ($libro->getId() === $id) { return $libro; }
        }
        return null;
    }
    
    public function buscarPorAutor(int $autorId): array
    {
        $resultado = [];
        foreach ($this->libros as $libro) {
            if ($libro->getAutorId() === $autorId) { $resultado[] = $libro; }
        }
        return $resultado;
    }
    
    public function obtenerDisponibles(): array
    {
        $resultado = [];
        foreach ($this->libros as $libro) {
            if ($libro->getDisponible()) { $resultado[] = $libro; }
        }
        return $resultado;
    }
}

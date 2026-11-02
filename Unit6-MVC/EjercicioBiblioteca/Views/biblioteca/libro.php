<h2>Detalle del libro</h2>

<p><strong>Título:</strong> <?= htmlspecialchars($libro->getTitulo()) ?></p>

<p><strong>Año:</strong> <?= $libro->getAnio() ?></p>

<p><strong>Autor:</strong>

    <?php if ($autor !== null): ?>
    
        <a href="?accion=autor&id=<?= $autor->getId() ?>"><?= htmlspecialchars($autor->getNombre()) ?></a>

    <?php else: ?> Autor desconocido <?php endif; ?>

</p>

<p><strong>Estado:</strong> <?php if ($libro->getDisponible()): ?>Disponible<?php else: ?>Prestado<?php endif; ?></p>

<a href="?accion=libros">Volver a los libros</a>

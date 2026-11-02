<h2>Ficha del autor</h2>
<p><strong>Nombre:</strong> <?= htmlspecialchars($autor->getNombre()) ?></p>
<p><strong>Nacionalidad:</strong> <?= htmlspecialchars($autor->getNacionalidad()) ?></p>
<h3>Sus libros</h3>
<ul>
    <?php foreach ($libros as $libro): ?>
        <li><a href="?accion=libro&id=<?= $libro->getId() ?>"><?= htmlspecialchars($libro->getTitulo()) ?></a></li>
    <?php endforeach; ?>
</ul>
<a href="?accion=libros">Volver a los libros</a>

<h2><?= htmlspecialchars($titulo) ?></h2>

<ul>
    <?php foreach ($libros as $libro): ?>
        <?php $autor = $autorRepositorio->buscarPorId($libro->getAutorId()); ?>
        <li>
            <a href="?accion=libro&id=<?= $libro->getId() ?>"><?= htmlspecialchars($libro->getTitulo()) ?></a>
            -
            <?php if ($autor !== null): ?>
                <a href="?accion=autor&id=<?= $autor->getId() ?>"><?= htmlspecialchars($autor->getNombre()) ?></a>
            <?php else: ?> Autor desconocido <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

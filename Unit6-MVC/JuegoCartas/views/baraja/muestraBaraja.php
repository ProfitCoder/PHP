<?php
    $dirImg = __DIR__ . '/../../public/assets/img/';
    $urlImg = 'assets/img/';
?>

<h2><?= $titulo ?></h2>

<?php if (!is_dir($dirImg)): ?>

    <p>No se encuentra la carpeta de imágenes.</p>

<?php elseif (!isset($cartas) || count($cartas) === 0): ?>

    <p>No hay cartas para mostrar.</p>

<?php else: ?>

    <p>Cartas mostradas: <?= count($cartas) ?></p>

    <?php foreach ($cartas as $carta): ?>

        <?php $nombreImagen = $carta->getNombreImagen(); ?>

        <?php if (is_file($dirImg . $nombreImagen)): ?>

            <img
                src="<?= $urlImg . $nombreImagen ?>"
                alt="<?= $carta ?>"
                width="100"
            >

        <?php else: ?>

            <span>Sin imagen: <?= $carta ?></span>

        <?php endif; ?>

    <?php endforeach; ?>

<?php endif; ?>
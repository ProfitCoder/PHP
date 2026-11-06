<h1>Imagen subida correctamente</h1>

<a href="index.php">Subir otra imagen</a>

<h2>Listado de imágenes</h2>

<?php foreach ($imagenes as $imagen): ?>
    <p>
        <img src="images/<?= e($imagen) ?>"
             alt="Imagen subida"
             width="200">
    </p>
<?php endforeach; ?>
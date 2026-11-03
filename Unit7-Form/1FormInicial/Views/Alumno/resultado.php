<h2>Datos del alumno</h2>

<p>Nombre: <?= htmlspecialchars($nombre) ?></p>
<p>Apellidos: <?= htmlspecialchars($apellidos) ?></p>
<p>Fecha de nacimiento: <?= htmlspecialchars($fecha) ?></p>
<p>Correo: <?= htmlspecialchars($correo) ?></p>

<p>Lenguajes:</p>
<ul>
    <?php foreach ($lenguajes as $lenguaje): ?>
        <li><?= htmlspecialchars($lenguaje) ?></li>
    <?php endforeach; ?>
</ul>

<p>¿Sabes crear páginas web estáticas? <?= htmlspecialchars($web) ?></p>

<p>Comentarios: <?= nl2br(htmlspecialchars($comentarios)) ?></p>

<p>Color favorito: <?= htmlspecialchars($color) ?></p>
<p>Número favorito: <?= htmlspecialchars($numero) ?></p>

<p>
    <?= $coinciden?'Las contraseñas coinciden.':'Las contraseñas no coinciden.'?>
</p>
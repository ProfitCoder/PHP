<h1>2. Spam</h1>

<?php if ($errores !== []): ?>

    <ul>

        <?php foreach ($errores as $error): ?>

            <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>

        <?php endforeach; ?>
    
    </ul>

<?php endif; ?>

<form action="index.php?controller=Spam&action=procesar" method="post">
    <p>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?>" required>
    </p>
    <p>
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" value="<?= htmlspecialchars($telefono, ENT_QUOTES, 'UTF-8') ?>" required>
    </p>
    <p>
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" value="<?= htmlspecialchars($correo, ENT_QUOTES, 'UTF-8') ?>" required>
    </p>
    <button type="submit">Enviar</button>
</form>

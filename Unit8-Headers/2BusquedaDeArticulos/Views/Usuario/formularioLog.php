<h1>Nuevo Contacto</h1>

<form method="POST" action="index.php?controller=Auth&amp;action=procesarUser">
    <p>
        <label for=nombre>Nombre</label>
        <input type="text" id="nombre" name="Usuario[nombre]" value="<?= e($usuario -> nombre) ?>" required/>
        <?php if(isset($errores['nombre'])): ?>
            <span class="error" style="color: red"><?= e($errores['nombre']) ?></span>
        <?php endif; ?>
    </p>

        <label for="pass">Password</label>
        <input type="password" id="pass" name="Usuario[password]" required/>
        <?php if(isset($errores['password'])): ?>
            <span class="error" style="color: red"><?= e($errores['password']) ?></span>
        <?php endif; ?>

    <br>

    <input type="submit" value="Enviar" />

</form>
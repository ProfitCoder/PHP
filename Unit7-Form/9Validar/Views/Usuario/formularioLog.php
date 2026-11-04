<h2>Candidatura a un puesto de trabajo</h2>

<form method="POST" action="index.php?controller=Auth&amp;action=procesarUser">
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="Usuario[nombre]" value="<?= e($usuario->nombre) ?>" required>

        <?php if (isset($errores['nombre'])): ?>
            <span style="color: red"><?= e($errores['nombre']) ?></span>
        <?php endif; ?>
    </p>

    <p>
        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" name="Usuario[apellidos]" value="<?= e($usuario->apellidos) ?>" required>

        <?php if (isset($errores['apellidos'])): ?>
            <span style="color: red"><?= e($errores['apellidos']) ?></span>
        <?php endif; ?>
    </p>

    <p>
        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="Usuario[correo]" value="<?= e($usuario->correo) ?>" required>

        <?php if (isset($errores['correo'])): ?>
            <span style="color: red"><?= e($errores['correo']) ?></span>
        <?php endif; ?>
    </p>

    <p>
        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" name="Usuario[telefono]" value="<?= e($usuario->telefono) ?>" required>

        <?php if (isset($errores['telefono'])): ?>
            <span style="color: red"><?= e($errores['telefono']) ?></span>
        <?php endif; ?>
    </p>

    <p>
        <label for="url">URL de trabajos anteriores</label>
        <input type="url" id="url" name="Usuario[url]" value="<?= e($usuario->url) ?>" required>

        <?php if (isset($errores['url'])): ?>
            <span style="color: red"><?= e($errores['url']) ?></span>
        <?php endif; ?>
    </p>

    <fieldset>
        <legend>Lenguajes que dominas</legend>
            <label>
                <input type="checkbox" name="Usuario[lenguajes][]" value="Python">
                Python
            </label>

            <label>
                <input type="checkbox" name="Usuario[lenguajes][]" value="PHP">
                PHP
            </label>

            <label>
                <input type="checkbox" name="Usuario[lenguajes][]" value="JavaScript">
                JavaScript
            </label>

            <label>
                <input type="checkbox" name="Usuario[lenguajes][]" value="Java">
                Java
            </label>

            <label>
                <input type="checkbox" name="Usuario[lenguajes][]" value="C++">
                C++
            </label>
        <?php if (isset($errores['lenguajes'])): ?>
            <p style="color: red"><?= e($errores['lenguajes']) ?></p>
        <?php endif; ?>
    </fieldset>

    <fieldset>
        <legend>Situación laboral actual</legend>

        <label>
            <input type="radio" name="Usuario[situacion]" value="sin empleo" required>
            Sin empleo
        </label>

        <label>
            <input type="radio" name="Usuario[situacion]" value="media jornada" required>
            Media jornada
        </label>

        <label>
            <input type="radio" name="Usuario[situacion]" value="tiempo completo" required>
            Tiempo completo
        </label>

        <?php if (isset($errores['situacion'])): ?>
            <p style="color: red"><?= e($errores['situacion']) ?></p>
        <?php endif; ?>
    </fieldset>

    <p><button type="submit">Enviar candidatura</button></p>
</form>
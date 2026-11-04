<h2>Datos válidos de la candidatura</h2>
<p>La candidatura ha superado la validación.</p>

    <p>Nombre: <?= e($usuario->nombre) ?></p>
    <p>Apellidos: <?= e($usuario->apellidos) ?></p>
    <p>Email: <?= e($usuario->correo) ?></p>
    <p>Teléfono: <?= e($usuario->telefono) ?></p>
    <p>Situación laboral: <?= e($usuario->situacion) ?></p>
    <p>Lenguajes: <?= e(implode(', ', $usuario->lenguajes)) ?: 'Ninguno seleccionado' ?></p>
    <p>Url de trabajos anteriores: <?= e($usuario->url) ?></p>


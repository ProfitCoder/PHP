<h1>Información recibida</h1>
<p>Estado del usuario: <?= htmlspecialchars($estadoUsuario, ENT_QUOTES, 'UTF-8') ?></p>
<?php if ($estadoUsuario === 'Recibido'): ?>
    <p>Nombre de usuario: <?= htmlspecialchars($usuario, ENT_QUOTES, 'UTF-8') ?></p>
<?php endif; ?>
<p>Estado de la contraseña: <?= htmlspecialchars($estadoClave, ENT_QUOTES, 'UTF-8') ?></p>
<?php if ($completo): ?>
    <p>Se han recibido los dos campos. Este ejercicio no autentica al usuario.</p>
<?php else: ?>
    <p>No se han recibido correctamente los dos campos.</p>
<?php endif; ?>
<p>La contraseña no se muestra ni se guarda.</p>
<p><a href="index.php">Volver al formulario</a></p>

<h1>3. Inicio de sesión</h1>
<p>Utiliza credenciales ficticias. Puedes dejar campos vacíos para comprobar el resultado.</p>
<form action="index.php?controller=Sesion&amp;action=recibir" method="post" autocomplete="off">
    <p>
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" id="usuario" name="usuario">
    </p>
    <p>
        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" autocomplete="new-password">
    </p>
    <button type="submit">Iniciar sesión</button>
</form>

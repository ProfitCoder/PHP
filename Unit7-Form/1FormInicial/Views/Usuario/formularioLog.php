<h1>Nuevo Contacto</h1>

<form method="POST" action="index.php?controller=Auth&amp;action=procesarUser">
    <p>
        <label for=nombre>Nombre</label>
        <input type="text" id="nombre" name="Usuario[nombre]"/>
    </p>

    <label for="pass">Password</label>
    <input type="password" id="pass" name="Usuario[password]" required/>

    <br>

    <input type="submit" value="Enviar" />

</form>
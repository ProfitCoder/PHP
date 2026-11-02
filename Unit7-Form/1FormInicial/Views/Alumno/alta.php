<h1>Alta alumno:</h1>

<form action="index.php?controller=Alumno&action=procesar" method="post">
    <p>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    </p>

    <p>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>
    </p>

    <p>
        <label for="fecha">Fecha de nacimiento:</label>
        <input type="date" id="fecha" name="fecha" required>
    </p>

    <p>
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>
    </p>

    <p>
        ¿Qué lenguajes de programación conoces?

        <label>
            <input type="checkbox" name="lenguajes[]" value="C++" checked>
            C++
        </label>

        <label>
            <input type="checkbox" name="lenguajes[]" value="JavaScript">
            JavaScript
        </label>

        <label>
            <input type="checkbox" name="lenguajes[]" value="PHP">
            PHP
        </label>

        <label>
            <input type="checkbox" name="lenguajes[]" value="Python">
            Python
        </label>
    </p>

    <p>
        ¿Sabes crear páginas web estáticas?

        <label>
            <input type="radio" name="web" value="Sí" checked>
            Sí
        </label>

        <label>
            <input type="radio" name="web" value="No">
            No
        </label>
    </p>

    <p>
        <label for="comentarios">Comentarios:</label><br>
        <textarea id="comentarios" name="comentarios"
                  rows="4" cols="45"></textarea>
    </p>

    <p>
        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" required>
    </p>

    <p>
        <label for="repetir">Repita la contraseña:</label>
        <input type="password" id="repetir" name="repetir" required>
    </p>

    <p>
        <label for="color">Color favorito:</label>
        <input type="color" id="color" name="color">
    </p>

    <p>
        <label for="numero">Número favorito:</label>
        <input type="number" id="numero" name="numero" value="1">
    </p>

    <button type="submit">Enviar</button>
</form>
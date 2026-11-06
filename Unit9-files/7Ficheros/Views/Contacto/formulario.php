<h1>Nuevo Contacto</h1>

<form method="POST" action="index.php?controller=contacto&amp;action=procesar" enctype="multipart/form-data" novalidate>
    <p>
        <label for=nombre>Nombre</label>
        <input type="text" id="nombre" name="contacto[nombre]" required/>
        <?php if(isset($errores['nombre'])): ?>
            <span class="error" style="color: red"><?= e($errores['nombre']) ?></span>
        <?php endif; ?>
    </p>

    <p>
        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" name="contacto[apellidos]"/>.
        <?php if(isset($errores['apellidos'])): ?>
            <span class="error" style="color: red"><?= e($errores['apellidos']) ?></span>
        <?php endif; ?>
    </p>

    <p>
        <label for=correo>Correo Electronico</label>
        <input type="text" id="correo" name="contacto[correo]"/>
        <?php if (isset($errores['correo'])): ?>
            <span style="color: red"><?= e($errores['correo']) ?></span>
        <?php endif; ?>
    </p>

    <p>
        <label for="metodoPago">Selecciona método de pago</label>
        <select id="metodoPago" name="contacto[metodosPago][]" multiple size = "3">
            <option value="VISA" selected>VISA</option>
            <option value="PAYPAL" selected>PAYPAL</option>
            <option value="MASTERCARD" selected>MASTERCARD</option>
        </select>
        <?php if(isset($errores['metodosPago'])): ?>
            <span class="error" style="color: red"><?= e($errores['metodosPago']) ?></span>
        <?php endif; ?>
    </p>

    <p>
        <label for="foto">Selecciona una imagen:</label>
        <input type="file" id="foto" name="foto" accept="image/*">
        <?php if (isset($errores['foto'])): ?>
            <span style="color: red"><?= e($errores['foto']) ?></span>
        <?php endif; ?>
    </p>

    <p>
        <input type="checkbox" id="marcar" name="contacto[marcar]" value="1" required/>
        <label for="marcar">Aceptar los términos y condiciones</label>
    </p>    
    
    <br>

    <input type="submit" value="Enviar" />

</form>
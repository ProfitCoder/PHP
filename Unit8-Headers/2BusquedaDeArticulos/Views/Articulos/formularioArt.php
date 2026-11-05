<h1>Buscar Articulo</h1>

<form method="POST" action="index.php?controller=Articulos&amp;action=procesarArticulo">
    <p>
        <label for=id>Id</label>
        <input type="text" id="id" name="Articulo[id]" required/>
        <?php if(isset($errores['id'])): ?>
            <span class="error" style="color: red"><?= e($errores['id']) ?></span>
        <?php endif; ?>
    </p>

    <br>

    <input type="submit" value="Enviar" />

</form>
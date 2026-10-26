    <h1>Productos de la tienda</h1>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Precio con IVA</th>
            <th>Stock</th>
        </tr>

        <?php foreach ($productos as $producto) { ?>
            <tr>
                <td><?= htmlspecialchars($producto->getNombre()) ?></td>
                <td><?= $producto->getPrecio() ?> €</td>
                <td><?= $producto->getPrecioConIva() ?> €</td>
                <td>
                    <?php
                    if ($producto->getStock() == 0) {
                        echo "Agotado";
                    } else {
                        echo $producto->getStock();
                    }
                    ?>
                </td>
            </tr>
        <?php } ?>
    </table>
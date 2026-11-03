<h1>Calculadora</h1>

<form method="post" action="index.php?controller=Calculadora&amp;action=calcular">

    <p>
        <label for="numero1">Primer número:</label>
        <input type="number" id="numero1" name="numero1" step="any" required>
    </p>
    
    <p>
        <label for="numero2">Segundo número:</label>
        <input type="number" id="numero2" name="numero2" step="any" required>
    </p>
    
    <button type="submit" name="operacion" value="sumar">Sumar</button>
    <button type="submit" name="operacion" value="restar">Restar</button>
    <button type="submit" name="operacion" value="multiplicar">Multiplicar</button>
    <button type="submit" name="operacion" value="dividir">Dividir</button>

</form>

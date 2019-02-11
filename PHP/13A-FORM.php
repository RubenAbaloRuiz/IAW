<html>
<body>
<form action="13A-SELECT.php" method="post">
    Introduce el Nombre del cliente: <input type="text" name="nombre"> <br>
    Calle del cliente: <input type="integer" name="calle"> <br>
    Prosciuto: <input type="checkbox" name="prosci" value="Yes" />
    <select name="nopros">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    Napolitana: <input type="checkbox" name="napol" value="Yes" />
    <select name="nonapo">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    Mozzarela: <input type="checkbox" name="mozz" value="Yes" />
    <select name="nomoza">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <input type="submit" value="SEND">
</form>
</body>
</html>
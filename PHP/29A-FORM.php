<html>
<head> <title>Page 1</title> </head>
<body>
    <?php
    if (isset($_COOKIE['paco']))
        echo "Welcome " . $_COOKIE['paco'];
    ?>

<form action="29A-SELECT.php" method="post">
    <input type="text"  name="name">Inserta un nombre<br>
    <input type="submit" value="Create cookie">
</form>
</body>
</html>
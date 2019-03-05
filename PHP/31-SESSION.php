<?php session_start(); ?>
<html>
<head> <title>Page 3</title> </head>
<body>
<?php
echo "Nombre del usuario:".$_SESSION['user'];
?>
</body>
</html>
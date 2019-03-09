
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>
<body>
<?php
if (isset($_REQUEST["error"])) {
    echo "Wrong password";
}
?>
<form action="33-HEAD.php" method="POST">
    Password: <input type="password" name="password" /><br/><br/>
    <input type="submit" value="Send" />
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> PHP</title>
</head>
<body>
<?php
for ($i = 32; $i <= 255; $i++) {
    echo sprintf("%c", $i) . "<br/>";
}
?>
</body>
</html>
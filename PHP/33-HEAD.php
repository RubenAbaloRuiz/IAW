<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>header</title>
</head>
<body>
<?php
if ($_REQUEST["password"] === "1234") {
    echo "Welcome!";
} else {
    header("Location: 33-FORM.php?error=1");
}
?>
</body>
</html>
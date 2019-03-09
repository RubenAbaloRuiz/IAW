<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<?php
if (checkdate($_REQUEST["month"], $_REQUEST["day"], $_REQUEST["year"])) {
    echo "Entered date is valid.";
} else {
    echo "Entered date is not valid.";
}
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<?php
if (isset($_REQUEST["fileName"])) {
    $f = fopen($_REQUEST["fileName"], "r") or die("File Error");
    while (!feof($f)) {
        $line = fgets($f);
        $line2 = nl2br($line);
        echo $line2;
    }
    fclose($f);
} else {
    echo "Debes pasar un archivo por parametro";
}
?>
</body>
</html>
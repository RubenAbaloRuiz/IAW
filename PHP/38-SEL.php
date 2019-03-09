<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercises PHP</title>
    <style>
    </style>
</head>
<body>
<?php
$con1 = mysqli_connect("localhost","root","","base1");
if (mysqli_connect_errno($con1)) {
    printf("Error: ", mysqli_connect_error());
}
$curso = isset($_REQUEST["codigocurso"]) ? $_REQUEST["codigocurso"] : null;
$nombreAlumno = isset($_REQUEST["nombre"]) ? $_REQUEST["nombre"] : null;
$mailAlumno = isset($_REQUEST["mail"]) ? $_REQUEST["mail"] : "";
$birthDate = null;
if (checkdate($_REQUEST["month"], $_REQUEST["day"], $_REQUEST["year"])) {
    $birthDate = $_REQUEST["year"] . "-" . $_REQUEST["month"] . "-" . $_REQUEST["day"];
}
$sql = "INSERT INTO alumnos (nombre, mail, BIRTH_DATE, codigocurso) VALUES ('" . $nombreAlumno . "', '" . $mailAlumno . "', '" . $birthDate . "', " . $curso . ")";
mysqli_query($con1, $sql) or die (mysqli_error($con1));
echo "Alumno " . $nombreAlumno . " añadido.";
mysqli_close($con1);
?>
</body>
</html>
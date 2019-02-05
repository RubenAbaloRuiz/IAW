<html>
<head>
<style>
table {
  border-collapse: collapse;

}
table td {
  border: 1px solid black;
}
</style>
</head>
<body>
<?php

$name = "Ruben";
$age = 25;
$weight = 70.2;
$category = "H5";
$champion = true;

?>

<table>
  <tr>
    <td>Name</td>
    <td>Age</td>
    <td>Weight</td>
    <td>Category</td>
    <td>Champion</td>
  </tr>
  <tr>
    <td><?php echo $name ?></td>
    <td><?php echo $age ?></td>
    <td><?php echo $weight ?></td>
    <td><?php echo $category ?></td>
    <td><?php echo $champion ?></td>
  </tr>

</table>

</body>
</html>

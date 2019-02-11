<html>
<head> <title>Search for student (2)</title> </head>
<body>

<?php

$suma=0;
$nopros = $_REQUEST['nopros'];
$nonapo = $_REQUEST['nonapo'];
$nomoza = $_REQUEST['nomoza'];



if(isset($_REQUEST['prosci']) && $_REQUEST['prosci'] == 'Yes'){

$suma += $nopros * 5.50;

}

if(isset($_REQUEST['napol']) && $_REQUEST['napol'] == 'Yes'){

    $suma += $nonapo * 6.75;

}

if(isset($_REQUEST['mozz']) && $_REQUEST['mozz'] == 'Yes'){

    $suma += $nomoza * 4.75;

}


$f=fopen("pizza.txt","a") or die("File Error");

fputs($f,$_REQUEST['nombre']);

fputs($f,"\n");

fputs($f,$_REQUEST['calle']);

fputs($f,"\n");

fputs($f,"Pizzas Prosciuto:".$nopros);

fputs($f,"\n");

fputs($f,"Pizzas Napolitana:".$nonapo);

fputs($f,"\n");

fputs($f,"Pizzas Mozzarela:".$nomoza);

fputs($f,"\n");

fputs($f,"Precio Total:".$suma);

fclose($f);

echo "El recibo ha sido creado.";

?>


</body>
</html>
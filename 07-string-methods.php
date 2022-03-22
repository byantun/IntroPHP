<?php include 'includes/header.php';
//conocer extencion de un string
$nombreCliente = 'Diego Antunez';
echo strlen($nombreCliente);

//eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//convertirlo a mayusculas
echo strtoupper('diego antunez');

//convertirlo a minusculas
echo strtolower('DIEGO ANTUNEZ');

$mail1 = 'correo@correo.com';
$mail2 = 'Correo@correo.com';
echo strtolower($mail1) === strtolower($mail2);

//revisar si un string existe o no
echo  strpos($nombreCliente, 'Diego');

$tipoCliente = 'Premium';
echo "<br/>";
echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo "<br/>";
echo "El Cliente {$nombreCliente} es {$tipoCliente}";
include 'includes/footer.php';
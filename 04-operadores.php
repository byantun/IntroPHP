<?php include 'includes/header.php';

$numero1 = 5;
$numero2 = 10;
//suma
$resultado = $numero1 + $numero2;
echo $resultado;
var_dump($resultado);


//resta
$resultado = $numero2 - $numero1;
echo $resultado;
var_dump($resultado);
//multiplicar
$resultado = $numero2 * $numero1;
echo $resultado;
var_dump($resultado);

//dividir
$resultado = $numero2 / $numero1;
echo $resultado;
var_dump($resultado);

//multiplicar cierta cantidad de veces (elevado)
$resultado = 2 ** 3;
echo $resultado;
var_dump($resultado);

include 'includes/footer.php';
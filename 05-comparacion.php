<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = '30';

var_dump($numero1 > $numero2);
echo "<br/>";
var_dump($numero1 < $numero2);
echo "<br/>";
var_dump($numero1 >= $numero2);
echo "<br/>";
var_dump($numero1 <= $numero2);
echo "<br/>";
var_dump($numero1 == $numero2);
echo "<br/>";
var_dump($numero2 == $numero4);
echo "<br/>";
var_dump($numero2 === $numero4);
echo "<br/>";
var_dump($numero3 <=> $numero1); //devuelve -1 si izquierda es menor , 0 si es igual o 1 si izquierda es mayor









include 'includes/footer.php';
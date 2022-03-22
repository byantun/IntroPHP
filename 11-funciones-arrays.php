<?php include 'includes/header.php';
//in_array buscar elementos en un arreglo

$carrito = ['Tablet', 'Monitor','Computadora'];
var_dump(in_array('Tablet',$carrito));
var_dump(in_array('cable',$carrito));


//Ordenar elementos de un arreglo
$numero = array(1,2,5,8,3,6);
sort($numero);//de menor a mayor
rsort($numero); //de mayor a menor

echo "<pre>";
var_dump($numero);
echo "<pre>";


//ordenar arreglo asociativo
$cliente =  array(
    'saldo' => 200,
    'tipo' => 'premium',
    'nombre' => 'Diego'
);

asort($cliente); //ordena por valores orden alfabetico
arsort($cliente); //ordena por valores z primero.

echo "<pre>";
var_dump($cliente);
echo "<pre>";

ksort($cliente); //ordena las llaves por orden alfabetico
krsort($cliente); //ordena por orden alfabetico de la z a la A
echo "<pre>";
var_dump($cliente);
echo "<pre>";

include 'includes/footer.php';
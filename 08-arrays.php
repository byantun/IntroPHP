<?php include 'includes/header.php';

$carrito = ['Tablet', 'Monitor','Computadora'];
//Util par ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "<pre>";

//acceder a un elemento de un array
echo $carrito[3];

//Agregar un nuevo item
$carrito[3] = 'Nuevo Producto'; //conociendo el indice

//Añadir un elemento nuevo al final
array_push($carrito, 'Audifonos');

//Añadir un elemento nuevo al inicio
array_unshift($carrito, 'Smart Watch');


//Otro tipo de crear arreglos
$cliente = array('Cliente1','Cliente2', 'CLiente3');
echo "<pre>";
var_dump($cliente);
echo "<pre>";

include 'includes/footer.php';
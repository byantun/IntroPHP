<?php include 'includes/header.php';

//While
$i = 0;
$carrito = ['Tablet', 'Monitor','Computadora'];
echo "<br>";

while($i < 10){
echo $i . "<br>";
$i++;
}

echo "<br>";
//Do while
$i = 0;
Do{
    echo $i . "<br>";
    $i++;
} while($i < 10);
/**
 * 3 imprimir fizz
 * 5 imprimir buzz
 * 3 y 5 imprimir fizz buzz
 */
echo "<br>";
//for loop
for($i = 1; $i < 100 ; $i++ ) {
    if($i % 15 ===0){
        echo $i . "fizz buzz <br>";
    }else if($i % 3 ===0){
        echo $i . "fizz <br>";
    }else if ($i % 5 ===0){
        echo $i . "buzz <br>";
    }
}

include 'includes/footer.php';
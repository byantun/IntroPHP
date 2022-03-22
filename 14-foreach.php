<?php include 'includes/header.php';

//for each loop
// $clientes = array('Diego','Juan', 'Maria');

// foreach($clientes as $cliente){
//     echo $cliente . "<br>";
// }

// echo count($clientes);
// $clientes = [
//     'nombre' => 'diego',
//     'saldo' => 200,
//     'tipo' => 'premium'
// ];
// echo '<br>';

// foreach ($clientes as $key => $valor){
//     echo $key . ' - ' . $valor . '<br>';
// }

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor',
        'precio' => 500,
        'disponible' => false
    ],
    [
        'nombre' => 'Notebook',
        'precio' => 1000,
        'disponible' => true
    ]
];
foreach ($productos as $producto){ ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?></p>
        <p>Precio: <?php echo $producto['precio']; ?></p>
        <p><?php echo $producto['disponible'] ? 'Disponible' : 'No Disponible'?></p>
        <?php
        // if ($producto['disponible']){
        //     echo "<p>Disponible</p>";
        // }else{
        //     echo "<p>No Disponible</p>";
        // }
        ?>
    </li>
    <?php

    // echo "<pre>";
    // var_dump($producto);
    // echo "</pre>";

}


include 'includes/footer.php';
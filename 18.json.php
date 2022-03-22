<?php include 'includes/header.php';

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


echo '<pre>';
var_dump($productos);
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
$json_Array = json_decode($json);
var_dump($json);
var_dump($json_Array);
echo '</pre>';





include 'includes/footer.php';
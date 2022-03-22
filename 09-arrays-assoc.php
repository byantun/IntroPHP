<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Diego',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<pre>";
var_dump($cliente['nombre']);
echo "<pre>";

echo $cliente['saldo'];
echo $cliente['informacion']['tipo'];

$cliente['codigo'] = 546464646;
echo "<pre>";
var_dump($cliente);
echo "<pre>";


include 'includes/footer.php';
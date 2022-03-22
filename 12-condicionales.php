<?php include 'includes/header.php';

$autenticado = true;
$admin = false;
if($autenticado || $admin){
    echo "Usuario Autenticado correctamente";
}else {
    echo "Usuario no Autenticado";
}

//if anidados..
$cliente = [
    'nombre' => 'Diego',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'premium'
    ]
];
echo "<br>";
if(!empty($cliente)){
    echo "El arreglo de cliente esta vacio";
    if($cliente['saldo'] > 0){
        echo "Saldo disponible para compra";
    }
}else{
    echo "El arreglo de cliente no esta vacio";
}

echo "<br>";
//else if
if($cliente['saldo'] > 0){
    echo "el cliente tiene saldo";
}else if ($cliente['informacion']['tipo'] === 'premium'){
    echo "el cliente es premium";
}else{
    echo "el cliente definido no tiene saldo o no es premium";
}


//switch
echo "<br>";
$tecnologia = 'PHP';
switch($tecnologia){
    case 'PHP':
        echo "PHP un excelente lenguaje";
        break;
    case 'HTML':
        echo "Lenguaje de marcado";
        break;
    default:
        echo "algun otro lenguaje";
        break;
}
include 'includes/footer.php';
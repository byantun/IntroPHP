<?php
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado() : string {
    return 'El usuario esta autenticado';
}

$usuario = usuarioAutenticado();
echo $usuario;

include 'includes/footer.php';
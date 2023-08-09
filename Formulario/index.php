<?php

include '../Formulario/formulario.php';

    $nombres = 'Esteban David';
    $apellidos = 'Jimenez Jimenez';
    $fecha_nacimiento = '29-10-2002';
    $documento = '1002697484';
    $tipo_documento = 'cc';
    $telefono = '3207319136';
    $direccion = 'calle 79 #64-31';
    $ciudad = 'Bogota';
    $email = 'estdav02@gmai.com';

    $usersBasic = new Formulario($nombres, $apellidos, $documento, $fecha_nacimiento, $tipo_documento, $telefono, $ciudad, $direccion, $email);

    echo $usersBasic-> getDataUser();
?>
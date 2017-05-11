<?php

header('Content-Type: application/json; charset=utf-8');

$respuesta = array('Imagen' => 'img\logorbm.jpg',
    'Texto1' => 'Agregar Nuevo Usuario',
    'Texto2' => 'Nombre:',
    'Texto3' => 'Cedula:',
    'Texto4' => 'Direccion:',
    'Texto5' => 'Telefono:',
    'Texto6' => 'Celular:',
    'Texto7' => 'Correo:',
    'Texto8' => 'Rol',
    'Texto9' => 'Contraseña:',
);

echo json_encode($respuesta);


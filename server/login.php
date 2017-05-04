<?php

header('Content-Type: application/json; charset=utf-8');

$respuesta = array('Imagen' => 'img\logo.png',
         'Texto1' =>'I.E RMB',
         'Texto2' =>'Usuario',
         'Texto3' =>'Contraseña',
      
       
);

echo json_encode($respuesta);
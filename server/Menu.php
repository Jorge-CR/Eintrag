<?php

header('Content-Type: application/json; charset=utf-8');

$respuesta = array('Imagen' => 'img\logorbm.jpg',
         'Texto1' =>'Menu Principal',
         'Texto2' =>'Institucion Educativa Ramon Martinez Benitez',
         'Texto3' =>'Hora',
      
       
);

echo json_encode($respuesta);

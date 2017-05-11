<?php

header('Content-Type: application/json; charset=utf-8');

$respuesta = array('Imagen' => 'img\logormb.jpg',
    'Imagen1' => 'img\logoSena.png',
    'Texto1' => 'Acerca De',
    'Texto2' => 'Control de Entrada y Salida',
    'Texto3' => 'Version 1.0',
    'Texto4' => 'Copyrigth 2017',
    'Texto5' => 'Centro de Tecnologias Agroindustriales',
    'Texto6' => 'Advertencia:',
    'Texto7' => 'Este programa esta protegido por las leyes de derecho de autor y los tratados de proteccion intelectual queda totalmente prohibida la repoduccion y distribusion',
    'Texto8' => 'parcial o total de este producto sin la debida autorizacion de sus autores esta penalizada por la ley con severas sanciones penales y civiles.',
    'Texto9' => 'Instructor acesor: Julian Augusto Lasso Figueroa',
    'Texto10' => 'Aprendices: Jomara Vannesa Castañeda Mejia - Jorge Eliecer Campeon Ramos',
    'Texto11' => 'Diseñadores: Jomara Vannesa Castañeda Mejia - Jorge Eliecer Campeon Ramos',
);

echo json_encode($respuesta);


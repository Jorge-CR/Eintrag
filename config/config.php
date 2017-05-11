<?php

$config = new myConfig();
$config->setPath('E:/xampp/htdocs/caac/');

$config->setDrive('pgsql');
$config->setHost('localhost');
$config->setPort(5432);
$config->setUser('postgres');
$config->setPassword('jorge1998');
$config->setDbname('Eintrag');
$config->setHash('md5');

$config->setUrl('http://localhost/caac/www/');
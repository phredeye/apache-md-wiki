<?php

define('HANDLER_ROOT', __DIR__);
define('DOCUMENT_ROOT', dirname(HANDLER_ROOT));

require_once(HANDLER_ROOT . '/vendor/autoload.php');


$file = realpath($_SERVER['PATH_TRANSLATED']);

if(!file_exists($file)) {
    throw new Exception('File does not exist');
}

$contents = file_get_contents($file);
$Parsedown = new Parsedown();

echo $Parsedown->text($contents); 

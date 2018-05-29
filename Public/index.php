<?php
if(file_exists(dirname(__DIR__). DIRECTORY_SEPARATOR . 'Passersmate' . DIRECTORY_SEPARATOR . 'init.php')){
	require dirname(__DIR__). DIRECTORY_SEPARATOR . 'Passersmate' . DIRECTORY_SEPARATOR . 'init.php';
}

$app = new app;


<?php
require './vendor/autoload.php';


use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use \classes\matematica\Basica;

// create a log channel - cria um canal de log - classes do repositorio
$log = new Logger('name');
$log->pushHandler(new StreamHandler('teste.log', Logger::WARNING)); //caminho do arquivo onde ficara salvo


//usando classes minhas
$mat = new Basica();
echo $mat->somar(10, 10);


// add records to the log - 
$log->warning('Foo');
$log->error('Bar');
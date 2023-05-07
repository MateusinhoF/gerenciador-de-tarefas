<?php

define("BASE_URL","http://localhost/");
$infodb['dbname'] = 'gerenciador_tarefas';
$infodb['host'] = 'db';
$infodb['dbuser'] = 'root';
$infodb['dbpassword'] = 'root';

global $db;

try{
    $db = new PDO("mysql:dbname=".$infodb['dbname'].";host=".$infodb['host'],$infodb['dbuser'],$infodb['dbpassword']);
    
}catch(PDOException $e){
    echo "Erro ".$e->getMessage();
    exit;
}
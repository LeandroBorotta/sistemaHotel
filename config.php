<?php
use Demo\Common\Environment;
Environment::load(__DIR__);

$DB_HOST= getenv('DB_HOST');
$DB_USER= getenv('DB_USER');
$DB_PASS= getenv('DB_PASS');
$DB_NAME= getenv('DB_NAME');

$pdo = new PDO('mysql:host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS);

if($pdo->errorCode() !== null){
    $errorInfo = $pdo->errorInfo();
    echo 'Erro na conexão: ' . $errorInfo[2];
}
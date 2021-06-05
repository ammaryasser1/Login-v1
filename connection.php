<?php
$localhost = '127.0.0.1';
$dbname = 'test';
try{
    $pdo= new PDO("mysql://hostname={$localhost};dbname={$dbname}",'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    $e->getMessage();
}
?>
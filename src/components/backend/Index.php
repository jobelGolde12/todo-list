<?php 
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'todolist_db';

$dns = "msql:host=$host;dbname=$dbname";


try{
    $pdo = new PDO($dns,$user,$pass);
    echo "Connect to database";
}catch(PDOException $e){
    echo "". $e->getMessage();
}

$data = ['id' => 1, 'name' => 'jobel v. golde'];


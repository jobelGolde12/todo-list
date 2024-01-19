<?php 
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'todolist_db';

$dns = "msql:host=$host;dbname=$dbname";

$pdo;
try{
    $pdo = new PDO($dns,$user,$pass);
    echo "Connect to database";
}catch(PDOException $e){
    echo "". $e->getMessage();
}

$query1 = $pdo->query("SELECT * FROM todo_data_tbl");
while($row = $query1->fetch(PDO::FETCH_ASSOC)){
    echo "". $row['todo']. $row['date']. $row['time'];
}
$data = ['id' => 1, 'name' => 'jobel v. golde'];



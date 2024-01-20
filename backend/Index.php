<?php 
header('Access-Control-Allow-Origin: *');

header('Content-type: application/json');
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'todolist_db';

$dns = "mysql:host=$host;dbname=$dbname";

$pdo;
try{
    $pdo = new PDO($dns,$user,$pass);
    // echo "Connect to database";
}catch(PDOException $e){
    echo "". $e->getMessage();
}
$data = [];
$query1 = $pdo->query("SELECT * FROM todo_data_tbl");
while($row = $query1->fetch(PDO::FETCH_ASSOC)){
    $data[] = ["todo" => $row['todo'],"date" => $row['date'],"time" => $row['time']];
}



echo json_encode($data);
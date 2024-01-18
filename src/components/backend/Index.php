<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'todolist_db';

$dns = "msql:host=$host;dbname=$dbname";

$pdo = new PDO($dns,$user,$pass);

<?php

$host = '127.0.0.1';
$db   = 'barsukas';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options); // tarpininkas, objektas




$sql = 
"SELECT animals.id as a_id, `name`, `number`, phones.id as p_id
FROM animals
LEFT JOIN phones
ON animals.id = phones.animal_id;
";

$stmt = $pdo->query($sql); // kverinam ir gaunam steitmento objekta


while ($row = $stmt->fetch()) // traukiam eilute is steitmento
{
    echo $row['a_id'].' - '.$row['p_id'].' : '.$row['name'].' '.$row['number'].'<br>';
}
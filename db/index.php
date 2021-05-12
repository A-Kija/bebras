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


/////////// READ

$sql = 
"SELECT `name`, `height`, `type`
FROM `trees`
WHERE (`type` = 1 AND `height` > 4) OR `type` <> 1
ORDER BY `height` DESC
"; // komanda SQL kalba ideta i stringa

$stmt = $pdo->query($sql); // kverinam ir gaunam steitmento objekta


while ($row = $stmt->fetch()) // traukiam eilute is steitmento
{
    echo $row['name'].' '.$row['height'].' '.$row['type'].'<br>';
}


//////CREATE
$sql = 
"INSERT INTO trees (`name`, `height`, `type`)
VALUES ('Agrastas', 0.78, 2)
";
$pdo->query($sql); // kverinam



/////DELETE
$sql = 
"DELETE FROM trees
WHERE `name` = 'Agrastas' AND `id` > 20
";
$pdo->query($sql); // kverinam



///////UPDATE
$sql = 
"UPDATE trees
SET `height`= 0.45
WHERE `id` = 18
";
$pdo->query($sql); // kverinam
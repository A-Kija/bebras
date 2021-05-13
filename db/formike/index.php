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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['action'] == 'cut') {
        $sql = 
        "DELETE FROM trees
        WHERE `name` = ?
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(  [$_POST['tree_name']  ]);



        // $pdo->query($sql); // kverinam
    }
    if ($_POST['action'] == 'add') {

        $sql = 
        "INSERT INTO trees (`name`, `height`, `type`)
        VALUES (:n, :h, :typ)
        ";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([  'typ'=>$_POST['tree_type'], 'n'=>$_POST['tree_name'], 'h'=>$_POST['tree_height']   ]);


        // $pdo->query($sql); // kverinam labai blogai
    }

    header('Location: http://localhost/bebras/db/formike/');
    exit;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARIJOS DB FORMIKE</title>
</head>
<body>
    <h1>Add Tree</h1>
    <form action="" method="post">
        Name: <input type="text" name="tree_name">
        Height: <input type="text" name="tree_height">
        Type: <input type="text" name="tree_type">
        <input type="hidden" name="action" value="add">
        <button type="submit">ADD</button>
    </form>
    <hr>
    <h1>Cut Tree</h1>
    <form action="" method="post">
        Name: <input type="text" name="tree_name">
        <input type="hidden" name="action" value="cut">
        <button type="submit">CUT</button>
    </form>
    <hr>
<?php

$sql = 
"SELECT `name`, `height`, `type`
FROM `trees`
WHERE (`type` = 1 AND `height` > 4) OR `type` <> 1
ORDER BY `height` DESC
"; // komanda SQL kalba ideta i stringa

$stmt = $pdo->query($sql); // kverinam ir gaunam steitmento objekta


while ($row = $stmt->fetch()) // traukiam eilute is steitmento
{
    echo '<div style="font-size:11px;">'.$row['name'].' '.$row['height'].' '.$row['type'].'</div>';
}

?>


</body>
</html>
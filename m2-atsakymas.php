<?php
session_start();
$ats = $_SESSION['answer'] ?? 'Ko čia atsivilkai?';
unset($_SESSION['answer']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atsakymas</title>
</head>
<body>
    <a href="m2.php">Apklausa</a>
    <h1><?= $ats ?></h1>
    <h1><?= $_COOKIE['bebras'] ?></h1>
</body>
</html>
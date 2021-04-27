<?php
$bgColor = !isset($_GET['color']) || 1 == $_GET['color'] ? 'blue' : 'orange';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-1</title>
</head>
<body style="background-color:<?= $bgColor ?>;">
    <a style="color:white;" href="nd7-1.php">Blue</a>
    <a style="color:white;" href="?color=2">Orange</a>
</body>
</html>
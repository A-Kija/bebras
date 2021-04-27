<?php



if (isset($_POST['x']) && isset($_POST['y'])) {
    $rezultatas = (int)$_POST['x'] + (int)$_POST['y'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M1</title>
</head>
<body>
    <h1>metodas <?= $_SERVER['REQUEST_METHOD'] ?>.</h1>

    <form action="?labas=bebrai" method="post">
    X: <input type="text" name="x"><br>
    Y: <input type="text" name="y"><br>
    <button type="submit">Sumuoti</button>
    </form>
    <h1>Atsiųstų skaičių (x) ir (y) suma lygi <?= $rezultatas ?? 'nieko' ?>.</h1>
    <h1>Labas <?= $_GET['labas'] ?? 'nieko' ?>.</h1>
</body>
</html>
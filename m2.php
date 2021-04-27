<?php
session_start();

setcookie('bebras','123456', time()+3600, '/');

// TIKRINIMO SCENARIJUS
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['abc'] = 'Dalyvavo apklausoje';
    if (!isset($_POST['apklausa'])) {
        $_SESSION['answer'] = 'Žiopliukai, taigi pasirink atsakymą';
    }
    elseif ($_POST['apklausa'] == 3) {
        $_SESSION['answer'] = 'Tu esi mažas Genijus. Šaunuoliukas.';
    }
    else {
        $_SESSION['answer'] = 'Na labai panašiai, bet ne visai teisingai. Pabandyk dar kartą.';
    }
    header('Location: http://localhost/bebras/m2-atsakymas.php');
    die;
}



// APKLAUSOS RODYMO SCENARIJUS
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apklausa</title>
    <style>
    i {
        display: inline-block;
        width: 70px;
    }
    button {
        margin: 15px;
    }
    </style>
</head>
<body>
    <h1>APkLAUsA</h1>
    <img src="http://www.bigcheese.karoo.net/beaver1.jpg" alt="apklausa" style="float:left; width: 50%;">
    <form action="" method="post" style="padding: 20px; float:left; width: calc(50% - 40px);">
        <i>Zuikis</i> <input type="radio" name="apklausa" value="1"><br>
        <i>Kiškis</i> <input type="radio" name="apklausa" value="2"><br>
        <i>Bebras</i> <input type="radio" name="apklausa" value="3"><br>
        <i>Barsukas</i> <input type="radio" name="apklausa" value="4"><br>
        <button type="submit">Spėti</button>
    </form>
</body>
</html>
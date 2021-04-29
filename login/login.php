<?php
require __DIR__.'/bootstrap.php';
// scenarijus loginti
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($users as $user) {
        if ($_POST['name'] === $user['name']) {
            if (md5($_POST['psw']) === $user['psw']) {
                $_SESSION['logged'] = 1;
                $_SESSION['message'] = 'Welcome to DE FOREST, Dear';
                $_SESSION['msg_type'] = 'ok';
                $_SESSION['name'] = $user['name'];
                header('Location: http://localhost/bebras/login/authorized.php');
                die;
            }
        }
    }
    $_SESSION['message'] = 'Invalid name or password';
    $_SESSION['msg_type'] = 'error';
    header('Location: http://localhost/bebras/login/login.php');
    die;
}


//  scenarijus rodyti forma
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"
        integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>Hello</title>
</head>

<body>
    <div class="menu">
        <a href="./authorized.php">Data about Forests</a>
        <a href="./login.php">Login</a>
        <a href="./login.php?logout">LogOut</a>
    </div>
    <?php if ($msg): ?>
        <div class="alert alert-<?= $msgType ?>" role="alert"><?= $msg ?></div>
    <?php endif ?>
    <main class="login">
        <form action="./login.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Enter you user name HERE.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="psw" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </main>
</body>

</html>
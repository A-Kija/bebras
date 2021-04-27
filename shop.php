<?php
session_start();

// POST SCENARIJUS
if(!empty($_POST)) {
    $_SESSION['ar'] = $_POST['arbata'];
    header('Location: http://localhost/bebras/shop.php');
    die;
}

// GET SCENARIJUS
?>

<form action="" method="get">
    <input type="text" name="rodyk">
    <button type="submit">RODYK!</button>
</form>

<form action="" method="post">
    <input type="text" name="arbata">
    <button type="submit">SIŲSK ARBATĄ</button>
</form>

<?php


if (!isset($_GET['rodyk'])) {
    echo '<br>Labas, ka jumi parodyt?';
}
elseif ($_GET['rodyk'] == 'zuiki') {
    echo '<br>ZUIKIS';
}
elseif ($_GET['rodyk'] == 'bebra') {
    echo '<br>BEBRAS';
}
else {
    echo '<br>Tokio mes neturim'; 
}

$arbata = $_SESSION['ar'] ?? 'NĖRA ARBATOS';
unset($_SESSION['ar']);
echo '<br>';
echo $arbata;


_d($_GET, 'GET');
_d($_POST, 'POST');


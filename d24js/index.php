<?php
// GET Distance
if ('POST' == $_SERVER['REQUEST_METHOD']) {

    $rawData = file_get_contents("php://input");

    $data = json_decode($rawData);

    $curl_handle = curl_init();
    curl_setopt($curl_handle,CURLOPT_URL,'https://www.distance24.org/route.json?stops='.$data->from.'|'.$data->to);
    curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,20);
    curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);

    $buffer = curl_exec($curl_handle); // KREIPIMASIS server ====> $buffer
    
    curl_close($curl_handle);

    $answer = json_decode($buffer);

    header('Content-type: application/json');

    echo json_encode(['dist' => $answer->distance]);

    die;
}

//Show distance

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="app.js"></script>
    <title>Distance 24</title>
</head>

<body>

    <h1>Distance 24</h1>

        From: <input type="text" name="from">
        To: <input type="text" name="to">
        <button type="button">GET DISTANCE</button>

    <h2 style="color:red;"></h2>


</body>

</html>
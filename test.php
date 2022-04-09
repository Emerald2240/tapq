<?php
require_once "config/connect.php";
require_once "functions/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "includes/scripts.php";
    ?>
    <link rel="stylesheet" href="css/q_and_a.css?v=<?php echo time(); ?>">
    <title>Test Page</title>
</head>

<body>
    <?php
    //Sample Query
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM courses');
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['code'] . '<br>';
    }
    ?>
    <?php

    // $client = new http\Client;
    // $request = new http\Client\Request;

    // $request->setRequestUrl('https://api-football-v1.p.rapidapi.com/v3/timezone');
    // $request->setRequestMethod('GET');
    // $request->setHeaders([
    // 	'X-RapidAPI-Host' => 'api-football-v1.p.rapidapi.com',
    // 	'X-RapidAPI-Key' => 'SIGN-UP-FOR-KEY'
    // ]);

    // $client->enqueue($request)->send();
    // $response = $client->getResponse();

    // echo $response->getBody();
    ?>
</body>

</html>
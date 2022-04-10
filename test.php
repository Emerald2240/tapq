<?php
require_once "config/connect.php";
require_once "functions/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <?php
            //require_once "includes/scripts.php";
            ?> -->
    <!-- <link rel="stylesheet" href="css/q_and_a.css?v=<?php //echo time(); ?>"> -->
    <title>Test Page</title>
</head>

<body>
    <?php
    // //Sample Query
    // global $pdo;
    // $stmt = $pdo->query('SELECT * FROM courses');
    // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     echo $row['code'] . '<br>';
    // }
echo '<pre>';
    print_r (getParticularQnAInJson(
        '[
        {
           "number": 1,
           "question": "g",
           "answer": "g",
           "topic": "g"
        },
        {
           "number": 2,
           "question": "g",
           "answer": "g",
           "topic": "g"
        },
        {
           "number": 3,
           "question": "<?php<br>require_once &#34;config&#47;connect.php&#34;;<br>require_once &#34;functions&#47;functions.php&#34;;<br>&#47;&#47;session_start();<br>?><br><br><!DOCTYPE html><br><html lang=&#34;en&#34;><br><br><head><br>    <!-- <title>TA PAST QUESTIONS OTHER LEVEL PAGE<&#47;title><br>    <meta name=&#34;description&#34; content=&#34;TAPQ Home Page&#34;><br>    <meta property=&#39;og&#58;title&#39; content=&#34;TA PAST QUESTIONS HOME PAGE&#34;><br>    <meta property=&#39;og&#58;url&#39; content=&#34;https&#58;&#47;&#47;techac.net&#47;tapq&#47;level0.php&#34;><br>    <meta property=&#39;og&#58;image&#39; itemprop=&#34;image&#34; content=&#34;https&#58;&#47;&#47;techac.net&#47;tatb&#47;assets&#47;images&#47;mike.jpg&#34;><br>    <meta property=&#39;keywords&#39; content=&#34;Tech Acoustic&#44; Other Levels&#44; Past Questions&#44; TAPQ&#44; Levels&#44; ESUT&#44; Engineering&#44; Tech&#44; Science&#44; Computers&#34;><br>    <meta name=&#34;author&#34; content=&#34;Orji Michael Chukwuebuka at Tech Acoustic&#34;> --><br><br>    <?php<br>    require_once &#34;includes&#47;head.php&#34;;<br>    ?><br><&#47;head><br><br><body><br>    <div class=&#34;wrapper&#34;><br>        <!-- Header Start --><br>        <?php<br>        require_once &#34;includes&#47;header.php&#34;;<br>        ?><br>        <!-- Header End --><br><br><br>        <!-- Page Header Start --><br>        <div class=&#34;page-header&#34;><br>            <div class=&#34;container&#34;><br>                <div class=&#34;row&#34;><br>                    <div class=&#34;col-12&#34;><br>                        <h2><?php<br>                         if (isset($_GET[&#39;level&#39;])) &#123;<br>                        echo returnPageLevelTitle($_GET[&#39;level&#39;]); <br>                         &#125;else&#123;<br>                            echo returnPageLevelTitle(0); <br>                         &#125;?><&#47;h2><br>                    <&#47;div><br><br>                <&#47;div><br>            <&#47;div><br>        <&#47;div><br>        <!-- Page Header End --><br><br><br>        <!-- Service Start --><br>        <div class=&#34;service&#34;><br><br><br><br>            <div class=&#34;container-lg course_head&#34;><br>                <?php<br>                if (isset($_GET[&#39;level&#39;])) &#123;<br>                    loadLevelExamQuestions($_GET[&#39;level&#39;]);<br>                &#125;else&#123;<br>                    loadLevelExamQuestions(0);<br>                &#125;<br>                ?><br>            <&#47;div><br><br><br><br>        <&#47;div><br>        <!-- Service End --><br><br>        <!-- Footer Start --><br>        <?php<br>        require_once &#34;includes&#47;footer.php&#34;;<br>        ?><br>        <!-- Footer End --><br><br>        <a href=&#34;#&#34; class=&#34;back-to-top&#34;><i class=&#34;fa fa-chevron-up&#34;><&#47;i><&#47;a><br>    <&#47;div><br><br>    <!-- JavaScript Libraries --><br>    <?php<br>    require_once &#34;includes&#47;scripts.php&#34;;<br>    ?><br><&#47;body><br><br><&#47;html>",
           "answer": "g",
           "topic": "g"
        }
     ]',
        1
    ));
    ?>
    <!-- <?php

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
            ?> -->
</body>

</html>
<?php
require_once "config/connect.php";
require_once "functions/functions.php";
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>TA PAST QUESTIONS 500 LEVEL PAGE</title>
    <meta name="description" content="TAPQ Year Five Page">
    <!-- <meta property='og:title' content="TA PAST QUESTIONS HOME PAGE"> -->
    <meta property='og:url' content="https://techac.net/tapq/level5.php">
    <!-- <meta property='og:image' itemprop="image" content="https://techac.net/tatb/assets/images/mike.jpg"> -->
    <meta property='keywords' content="Tech Acoustic, year 5, 500 Level, Past Questions, TAPQ, Levels, ESUT, Engineering, Tech, Science, Computers">
    <meta name="author" content="Orji Michael Chukwuebuka at Tech Acoustic">
    <?php
    require_once "includes/head.php";
    ?>
</head>

<body>
    <div class="wrapper">
        <!-- Header Start -->
        <?php
        require_once "includes/header.php";
        ?>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Fifth Year</h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Service Start -->
        <div class="service">

            <div class="container-lg course_head">
                <?php
                loadLevelExamQuestions(5);
                ?>
            </div>

        </div>
        <!-- Service End -->




        <!-- Footer Start -->
        <?php
        require_once "includes/footer.php";
        ?>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php
    require_once "includes/scripts.php";
    ?>
</body>

</html>
<?php
require_once "config/connect.php";
require_once "functions/functions.php";
//session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>TA PAST QUESTIONS 100 LEVEL PAGE</title>
    <meta name="description" content="TAPQ Year One Page">
    <!-- <meta property='og:title' content="TA PAST QUESTIONS HOME PAGE"> -->
    <meta property='og:url' content="https://techac.net/tapq/level1.php">
    <!-- <meta property='og:image' itemprop="image" content="https://techac.net/tatb/assets/images/mike.jpg"> -->
    <meta property='keywords' content="Tech Acoustic, year 1, 100 Level, Past Questions, TAPQ, Levels, ESUT, Engineering, Tech, Science, Computers">
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
                        <h2>First Year</h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Service Start -->
        <div class="service">

            <div class="container-lg course_head">
                <!-- <input class="form-control search-box" type="search" > -->
                <?php
                loadLevelExamQuestions(1);
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
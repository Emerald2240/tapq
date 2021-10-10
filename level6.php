<?php
require_once "config/connect.php";
require_once "functions/functions.php";
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta content="Tech Acoustic, Level 6, Sixth Year, Past Questions, TAPQ, Levels, ESUT, Engineering" name="keywords">
<meta content="This page contains all courses classified under year six" name="description">
    <?php
    require_once "includes/head.php";
    ?>
    <title>TA Past Questions 600 Level Page</title>
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
                        <h2>Sixth Year</h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Service Start -->
        <div class="service">
         

            <div class="container-lg course_head">
                <?php
                loadLevelExamQuestions(6);
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
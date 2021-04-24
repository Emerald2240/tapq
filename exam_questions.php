<?php
require_once "config/connect.php";
require_once "functions/functions.php";
//session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "includes/head.php";
    ?>
    <title><?php
            //this code snippet sets the coursename and id variables to the session global array, this is so the data is retained even when the page is refreshed
            if (isset($_GET['course_id']) && isset($_GET['exam_year']) && isset($_GET['exam_id'])) {
                $_SESSION['course_id'] = $_GET['course_id'];
                $_SESSION['exam_year'] = $_GET['exam_year'];
                $_SESSION['exam_id'] = $_GET['exam_id'];
                echo $_SESSION['course_code'];
            } elseif (isset($_SESSION['course_code'])) {
                echo $_SESSION['course_code'];
            } else {
                die;
            } ?> <?php echo $_GET['exam_year']; ?> Exam Page</title>
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
                        <h2><?php
                            //this code snippet sets the coursename and id variables to the session global array, this is so the data is retained even when the page is refreshed
                            if (isset($_GET['course_id']) && isset($_GET['exam_year']) && isset($_GET['exam_id'])) {
                                $_SESSION['course_id'] = $_GET['course_id'];
                                $_SESSION['exam_year'] = $_GET['exam_year'];
                                $_SESSION['exam_id'] = $_GET['exam_id'];
                                echo $_SESSION['course_code'];
                            } elseif (isset($_SESSION['course_code'])) {
                                echo $_SESSION['course_code'];
                            } else {
                                die;
                            } ?> <?php echo $_GET['exam_year']; ?> Exam</h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container-lg">

            </div>

            <div class="container-lg">
            <?php loadQandA($_SESSION['exam_id']); ?>
                <script>
                    //var json = "\"" = <?php loadQandA($_SESSION['exam_id']); ?> + "\"";
                    //var obj = JSON.parse(json);
                   // console.log(json);
                   
                </script>


            </div>

        </div>

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
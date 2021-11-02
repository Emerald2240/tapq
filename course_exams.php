<?php
require_once "config/connect.php";
require_once "functions/functions.php";
//session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="Past_Questions TAPQ ESUT <?php if (isset($_GET['course_code']) && isset($_GET['course_id'])) {
                                                echo $_GET['course_code'];
                                            } elseif (isset($_SESSION['course_code'])) {
                                                echo $_SESSION['course_code'];
                                            } ?>" name="keywords">
    <meta content="ESUT Past Exams For <?php if (isset($_GET['course_code']) && isset($_GET['course_id'])) {
                                            echo $_GET['course_code'];
                                        } elseif (isset($_SESSION['course_code'])) {
                                            echo $_SESSION['course_code'];
                                        } ?>" name="description">
    <?php
    require_once "includes/head.php";
    ?>
    <title><?php
            //this code snippet sets the coursename and id variables to the session global array, this is so the data is retained even when the page is refreshed
            if (isset($_GET['course_code']) && isset($_GET['course_id'])) {
                echo $_GET['course_title'];
                echo ' ';
                echo $_GET['course_code'];
                $_SESSION['course_code'] = $_GET['course_code'];
                $_SESSION['course_id'] = $_GET['course_id'];
                $_SESSION['course_title'] = $_GET['course_title'];
            } elseif (isset($_SESSION['course_code'])) {
                echo $_SESSION['course_title'];
                echo ' ';
                echo $_SESSION['course_code'];
            } else {
                die;
            } ?> EXAMS</title>
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
                            if (isset($_GET['course_code']) && isset($_GET['course_id'])) {
                                echo $_GET['course_title'];
                                $_SESSION['course_code'] = $_GET['course_code'];
                                $_SESSION['course_id'] = $_GET['course_id'];
                                $_SESSION['course_title'] = $_GET['course_title'];
                                $_SESSION['course_semester'] = $_GET['course_semester'];
                            } elseif (isset($_SESSION['course_code'])) {
                                echo $_SESSION['course_title'];
                            } else {
                                die;
                            } ?> </h2>
                        <h2><?php
                            //this code snippet sets the coursename and id variables to the session global array, this is so the data is retained even when the page is refreshed
                            if (isset($_GET['course_code']) && isset($_GET['course_id'])) {
                                echo $_GET['course_code'];
                                $_SESSION['course_code'] = $_GET['course_code'];
                                $_SESSION['course_id'] = $_GET['course_id'];
                                $_SESSION['course_title'] = $_GET['course_title'];
                                $_SESSION['course_semester'] = $_GET['course_semester'];
                            } elseif (isset($_SESSION['course_code'])) {
                                echo $_SESSION['course_code'];
                            } else {
                                die;
                            } ?> </h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Service Start -->
        <div class="service">

            <div class="container-lg">
                <?php
                loadCourseExamYears($_GET['course_id']);
                ?>
            </div>
<div><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8230887621285431"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-fb+5w+4e-db+86"
     data-ad-client="ca-pub-8230887621285431"
     data-ad-slot="4289956650"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
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
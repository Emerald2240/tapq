<?php
require_once "config/connect.php";
require_once "functions/functions.php";
//session_start();
//generateCQAPSL($_GET['course_id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "includes/head.php";
    ?>
    <title><?php
            //this code snippet sets the coursename and id variables to the session global array, this is so the data is retained even when the page is refreshed
            if (isset($_GET['course_code']) && isset($_GET['course_id'])) {
                echo $_GET['course_code'];
                $_SESSION['course_code'] = $_GET['course_code'];
                $_SESSION['course_id'] = $_GET['course_id'];
            } elseif (isset($_SESSION['course_code'])) {
                echo $_SESSION['course_code'];
            } else {
                die;
            } ?> Exams Page</title>
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
                <form>
                    <div class="form-group row">
                        <div class="col-sm-11 p-2">
                            <input type="text" class="form-control" type="search" placeholder="Enter Year">
                        </div>
                        <div class="col-sm-1 p-2 ">
                            <button class="btn btn-outline-info" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="container-lg">
                <?php
                loadCourseExamYears($_GET['course_id']);
                ?>
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
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
    <link rel="stylesheet" href="css/q_and_a.css?v=<?php echo time(); ?>">
    <title>
        <?php
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
        } ?>
        <?php echo $_GET['exam_year']; ?> Exam Page</title>
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

                        <?php
                        //this code snippet sets the coursename and id variables to the session global array, this is so the data is retained even when the page is refreshed
                        if (isset($_GET['course_id']) && isset($_GET['exam_year']) && isset($_GET['exam_id'])) {
                            $_SESSION['course_id'] = $_GET['course_id'];
                            $_SESSION['exam_year'] = $_GET['exam_year'];
                            $_SESSION['exam_id'] = $_GET['exam_id'];
                        } elseif (isset($_SESSION['course_code'])) {
                            echo $_SESSION['course_code'];
                        } else {
                            die;
                        } ?>
                        

                        <h2>ESUT</h2>

                        <h2>
                            <?php if ($_SESSION['course_semester'] == 1) {
                                echo "FIRST SEMESTER EXAMINATIONS ";
                            } else {
                                echo "SECOND SEMESTER EXAMINATIONS ";
                            }
                            yearSlashYear($_SESSION['exam_year']) ?>
                        </h2>
                        <h2><?php echo $_SESSION['course_code'];
                            echo ":";
                            echo $_SESSION['course_title']; ?></h2>
                            <h2>INSTRUCTION(S): <?php getExamInstructions( $_SESSION['exam_id']) ?></h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Service Start -->
        <div class="service">

            <div class="row">
                <div class="container-fluid">
                    <!-- 
                    <h1>ENUGU STATE UNIVERSITY OF SCIENCE AND TECHNOLOGY</h1>
                    <h1>FIRST SEMESTER EXAMINATIONS <?php yearSlashYear($_SESSION['exam_year']) ?></h1>
                    <h1><?php echo $_SESSION['course_code'];
                        echo ":";
                        echo $_SESSION['course_title']; ?></h1> -->



                    <div class="container-lg qpaper">
                        <!--  -->

                        <div class="qabox container-lg">

                            <?php loadQandA($_SESSION['exam_id']); ?>

                            <div class="question">
                                <span class="num">1</span>
                                <i class="fa fa-chart-bar fachart" id="mobile_bar"></i>
                                <div class="q">Who invented the first computer and when?</div>
                                <div class="topics">
                                    <span class="item">Basics of Computer Science</span>
                                    <span class="item">Inventions</span>
                                    <span class="item">Father of Computer</span>
                                </div>

                              

                                <i class="fa fa-chevron-down mbfa" id="mobile_bar" onclick="showAnswer('#answer')"></i>
                                <div class="a container-lg" id="answer">
                                      <hr>
                                    Charles Babbage in 1985
                                </div>
                                <div class="feedback container-lg"></div>
                            </div>

                
                        </div>


                    </div>

                </div>
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
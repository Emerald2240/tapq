<?php
require_once "config/connect.php";
require_once "functions/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="Past Questions, TAPQ, ESUT, <?php

                                                if (isset($_GET['course_code']) && isset($_GET['course_id'])) {
                                                    echo $_GET['course_code'];
                                                    echo ", ";
                                                    echo $_GET['exam_year'];
                                                } else {
                                                    echo "Not Found";
                                                }
                                                ?>" name="keywords">
    <meta content="<?php

                    if ($_GET['exam_id'] == 0) {

                        if (isset($_GET['course_code']) && isset($_GET['course_id'])) {
                            echo 'Sorted out Questions for ';
                            echo $_GET['course_code'];
                            echo " To Be Written In ";
                            echo $_GET['exam_year'];
                        } else {
                        }
                    } else {

                        if (isset($_GET['course_code']) && isset($_GET['course_id'])) {
                            echo 'ESUT Past Questions For';
                            echo $_GET['course_code'];
                            echo " Written In ";
                            echo $_GET['exam_year'];
                        } else {
                        }
                    } //end of if 
                    ?>" name="description">

    <?php
    require_once "includes/scripts.php";
    ?>

    <?php
    require_once "includes/head.php";
    ?>
    <link rel="stylesheet" href="css/q_and_a.css?v=<?php echo time(); ?>">
    <title>
        <?php  if ($_GET['exam_id'] == 0) {
            echo "Frequent Appearing Questions For ". $_GET['course_code'];
        }else{
                     echo $_GET['course_code']. " ".  $_GET['exam_year']; 
        }
         ?> EXAM</title>
</head>

<body onload="">

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

                       


                        <h2> <?php
                        if ($_GET['exam_id'] == 0) {
                            echo "Frequent Appearing Questions For ". $_GET['course_code'];
                        }else{
                        echo $_GET['course_code'];
                        }
                        ?> ESUT</h2>

                        <h2>
                            <?php
                            if ($_GET['course_semester'] == 1) {
                                echo "FIRST SEMESTER EXAMINATIONS ";
                            } else {
                                echo "SECOND SEMESTER EXAMINATIONS ";
                            }
                            yearSlashYear($_GET['exam_year']) ?>
                        </h2>
                        <h2>
                            <?php echo $_GET['course_code'];
                            echo ":";
                            echo $_GET['course_title']; ?>
                        </h2>
                        <h2>INSTRUCTION(S):
                            <?php  if ($_GET['exam_id'] == 0) {
                                echo "Study All";
                            }else{
                             getExamInstructions($_GET['exam_id']); 
                            }?>
                        </h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Service Start -->
        <div class="service">

            <div class="row">
                <div class="container-fluid">

                    <div class="container-lg qpaper">
                        <!--  -->

                        <div class="qabox container-lg" id="qabox">
                            <?php if ($_GET['exam_id'] == 0) {
                                generateCQAPSL($_GET['course_id']);
                            } else {
                                loadQandA($_GET['exam_id']);
                            } ?>


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




</body>

</html>
<?php
require_once "config/connect.php";
require_once "functions/functions.php";
//session_start();
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
                                                    echo $_SESSION['course_code'];
                                                    echo ", ";
                                                    echo $_SESSION['exam_year'];
                                                }
                                                ?>" name="keywords">
    <meta content="<?php

                    if ($_GET['exam_id'] == 0) {

                        if (isset($_GET['course_code']) && isset($_GET['course_id'])) {
                            echo 'Sorted out Questions for ';
                            echo $_GET['course_code'];
                            echo " To Be Written In ";
                            echo $_GET['exam_year'];
                        } elseif (isset($_SESSION['course_code'])) {
                            echo 'Sorted out Questions for ';
                            echo $_SESSION['course_code'];
                            echo " To Be Written In ";
                            echo $_SESSION['exam_year'];
                        }
                    } else {

                        if (isset($_GET['course_code']) && isset($_GET['course_id'])) {
                            echo 'ESUT Past Questions For';
                            echo $_GET['course_code'];
                            echo " Written In ";
                            echo $_GET['exam_year'];
                        } elseif (isset($_SESSION['course_code'])) {
                            echo 'ESUT Past Questions For';
                            echo $_SESSION['course_code'];
                            echo " Written In ";
                            echo $_SESSION['exam_year'];
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
        <?php echo $_GET['exam_year']; ?> EXAM</title>
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
                        <h2>
                            <?php echo $_SESSION['course_code'];
                            echo ":";
                            echo $_SESSION['course_title']; ?>
                        </h2>
                        <h2>INSTRUCTION(S):
                            <?php getExamInstructions($_SESSION['exam_id']) ?>
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
                            <?php if ($_SESSION['exam_id'] == 0) {
                                generateCQAPSL($_SESSION['course_id']);
                            } else {
                                loadQandA($_SESSION['exam_id']);
                            } ?>


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
<?php
require_once "../config/connect.php";
require_once "../functions/functions.php";

if (!isset($_SESSION['log'])) {
    header('location:login.php');
    exit();
}

//echo '<pre>';
//print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("includes/head.php") ?>
    <title>
        <?php
        //this code snippet sets the coursename and id variables to the session global array, this is so the data is retained even when the page is refreshed
        if (isset($_GET['coursename'])) {
            echo $_GET['coursename'];
            $_SESSION['course_name'] = $_GET['coursename'];
            $_SESSION['course_id'] = $_GET['id'];
        } else {
            echo $_SESSION['course_name'];
        }
        ?>
        Workshop
    </title>

    <?php require_once("includes/pajinate_includes.php") ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once("includes/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once("includes/navbar.php") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">
                        <?php
                        //this code snippet sets the coursename and id variables to the session global array, this is so the data is retained even when the page is refreshed
                        if (isset($_GET['coursename'])) {
                            echo $_GET['coursename'];
                            $_SESSION['course_name'] = $_GET['coursename'];
                            $_SESSION['course_id'] = $_GET['id'];
                        } else {
                            echo $_SESSION['course_name'] . ' Questions and Answers';
                        }
                        ?></h1>

                </div>
                <!-- /.container-fluid -->

                <div class="row">
                    <div class="container-fluid">

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Add New Exam</h6>
                            </div>

                            <div class="card-body">
                                <?php
                                //.showDataMissing($dataMissing);
                                ?>
















                                <div class="container-lg">




                                    <form action=<?= $_SERVER["PHP_SELF"]; ?> method="post" enctype="multipart/form-data">


                                        <div class="form-group"></div>
                                        <?php
                                        createQuestionAndAnswerBoxes($_SESSION['exam']['number_of_questions']);
                                        ?>




                                    </form>




                                </div>




























                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?php require_once("includes/footer.php") ?>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php require_once("includes/logout_modal.php") ?>

    <?php require_once("includes/js_includes.php") ?>

</body>

</html>
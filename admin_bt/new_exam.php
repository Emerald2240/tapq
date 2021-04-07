<?php
require_once "../config/connect.php";
require_once "../functions/functions.php";

if (!isset($_SESSION['log'])) {
    header('location:login.php');
    exit();
}

//This code snippet initializes the datamissing variable with the missing items, so the showDataMissing function can display them
$dataMissing[] = processNewExam($_POST);
//print_r($dataMissing);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once("includes/head.php");
    ?>
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
        Add Exam</title>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">
                            <?php
                                    //this code snippet sets the coursename and id variables to the session global array, this is so the data is retained even when the page is refreshed
                            if (isset($_GET['coursename']) && isset($_GET['id'])) {
                                echo $_GET['coursename'];
                                $_SESSION['course_name'] = $_GET['coursename'];
                                $_SESSION['course_id'] = $_GET['id'];
                            } elseif (isset($_SESSION['course_name'])) {
                                echo $_SESSION['course_name'];
                            } else {
                                die;
                            }
                            ?></h1>
                    </div>



                    <!-- Content Row -->
                    <div class="row">
                        <div class="container-fluid">

                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Add New Exam</h6>
                                </div>

                                <div class="card-body">
                                    <?php
                                    showDataMissing($dataMissing);
                                    ?>
                                    <div class="container-lg">
                                        <form action=<?= $_SERVER["PHP_SELF"]; ?> method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="exam_year">Exam Year/Session</label>
                                                <select class="form-control" name="exam_year" id="exam_year">
                                                    <?php loadTenyears() ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="semester">Exam Semester</label>
                                                <select class="form-control" name="semester" id="semester">
                                                    <option value="1">First</option>
                                                    <option value="2">Second</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="obj_thr">Exam Format</label>
                                                <select class="form-control" name="obj_thr" id="obj_thr">
                                                    <option value="1">Objective</option>
                                                    <option value="2">Theory</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="no_questions">Number Of Questions</label>
                                                <input  type="number" class="form-control" name="no_questions" id="no_questions" value="3">
                                            </div>

                                            <div class="form-group">
                                                <label for="lecturer">Lecturer Incharge</label>
                                                <input type="text" class="form-control" name="lecturer" id="lecturer" value="Mr Lecturer">
                                            </div>

                                            <div class="form-group">
                                                <label for="duration">Exam Duration</label>
                                                <input type="text" class="form-control" name="duration" id="duration" value="2 Hours">
                                            </div>

                                            <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>


                                        </form>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            require_once("includes/footer.php");
            ?>
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
    <?php
    require_once("includes/logout_modal.php");
    ?>

    <?php
    require_once("includes/js_includes.php");
    require_once("includes/data_tables.php");
    ?>

</body>

</html>
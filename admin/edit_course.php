<?php
require_once "../config/connect.php";
require_once "../functions/functions.php";

if (!isset($_SESSION['log'])) {
    header('location:login.php');
    exit();
}

$dataMissing[] = processEditCourse($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once("includes/head.php");
    ?>
    <title>
        <?php
        //this code snippet sets the coursename, id, faculty, credit load, semester, and level variables to the session global array, this is so the data is retained even when the page is refreshed
        if (isset($_GET['coursename'])) {
            echo $_GET['coursename'];
            $_SESSION['course_name'] = $_GET['coursename'];
        } elseif (isset($_SESSION['course_name'])) {
            echo $_SESSION['course_name'];
        } else {

            die;
        }
        ?>
    </title>
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
                            if (isset($_GET['coursename'])) {
                                echo $_GET['coursename'];
                                $_SESSION['course_name'] = $_GET['coursename'];
                                $_SESSION['course_id'] = $_GET['id'];
                            } else {
                                echo $_SESSION['course_name'];
                            }
                            ?>
                        </h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="container-lg">
                            <?php
                            $dataMissing[] = processNewCourse($_POST);
                            showDataMissing($dataMissing);
                            ?>
                            <form action=<?= $_SERVER["PHP_SELF"]; ?> method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="code">Course Code</label>
                                    <input type="text" class="form-control" name="code" id="code" value="<?php
                                                                                                            if (isset($_GET['code'])) {
                                                                                                                echo $_GET['code'];
                                                                                                                $_SESSION['code'] = $_GET['code'];
                                                                                                            } else {
                                                                                                                echo $_SESSION['code'];
                                                                                                            }
                                                                                                            ?>">
                                </div>

                                <div class="form-group">
                                    <label for="title">Course Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="<?php
                                                                                                            if (isset($_GET['coursename'])) {
                                                                                                                echo $_GET['coursename'];
                                                                                                                $_SESSION['coursename'] = $_GET['coursename'];
                                                                                                            } else {
                                                                                                                echo $_SESSION['coursename'];
                                                                                                            }
                                                                                                            ?>">
                                </div>

                                <div class="form-group">
                                    <label for="credit">Credit Load. Formerly(<?php
                                                                if (isset($_GET['creditload'])) {
                                                                    echo $_GET['creditload'];
                                                                    $_SESSION['creditload'] = $_GET['creditload'];
                                                                } else {
                                                                    echo $_SESSION['creditload'];
                                                                }
                                                                ?>)</label>
                                    <select class="form-control" name="credit" id="credit">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">Other</option>
                                        <option value="8">Volatile</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="semester">Semester. Formerly(<?php
                                                                if (isset($_GET['semester'])) {
                                                                    echo $_GET['semester'];
                                                                    $_SESSION['semester'] = $_GET['semester'];
                                                                } else {
                                                                    echo $_SESSION['semester'];
                                                                }
                                                                ?>)</label>
                                    <select class="form-control" name="semester" id="semester">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="faculty">Course Faculty</label>
                                    <input type="tel" name="faculty" class="form-control" id="faculty" value="<?php
                                                                                                                if (isset($_GET['faculty'])) {
                                                                                                                    echo $_GET['faculty'];
                                                                                                                    $_SESSION['faculty'] = $_GET['faculty'];
                                                                                                                } else {
                                                                                                                    echo $_SESSION['faculty'];
                                                                                                                }
                                                                                                                ?>">
                                </div>

                                <div class="form-group">
                                    <label for="level">Level Offering. Formerly(<?php
                                                                if (isset($_GET['level'])) {
                                                                    echo $_GET['level'].'00';
                                                                    $_SESSION['level'] = $_GET['level'];
                                                                } else {
                                                                    echo $_SESSION['level'].'00';
                                                                }
                                                                ?>)</label>
                                    <select class="form-control" name="level" id="level">
                                        <option value="1">100 Level</option>
                                        <option value="2">200 Level</option>
                                        <option value="3">300 Level</option>
                                        <option value="4">400 Level</option>
                                        <option value="5">500 Level</option>
                                        <option value="6">600 Level</option>
                                        <option value="7">Other</option>
                                    </select>
                                </div>

                                <?php

                                ?>

                                <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>


                            </form>
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
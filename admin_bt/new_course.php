<?php
require_once "../config/connect.php";
require_once "../functions/functions.php";

if (!isset($_SESSION['log'])) {
    header('location:login.php');
    exit();
}

$dataMissing[] = processNewExam($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php
    require_once("includes/head.php");
    ?>
    <title>Add New Course</title>
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
                        <h1 class="h3 mb-0 text-gray-800">New Course</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="container-lg">
                        <?php
                                showDataMissing($dataMissing);
                                ?>
                            <form action=<?= $_SERVER["PHP_SELF"]; ?> method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="code">Course Code</label>
                                    <input type="text" class="form-control" name="code" id="code">
                                </div>
                                
                                <div class="form-group">
                                    <label for="title">Course Title</label>
                                    <input type="text" class="form-control" name="title" id="title">
                                </div>

                                <div class="form-group">
                                    <label for="credit">Credit Load</label>
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
                                    <label for="semester">Semester</label>
                                    <select class="form-control" name="semester" id="semester">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="faculty">Course Faculty</label>
                                    <input type="tel" name="faculty" class="form-control" id="faculty">
                                </div>

                                <div class="form-group">
                                    <label for="level">Level Offering</label>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once("includes/js_includes.php");
    ?>

</body>

</html>
<?php
require_once "../config/connect.php";
require_once "../functions/functions.php";

if (!isset($_SESSION['log'])) {
    header('location:login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php
    require_once("includes/head.php");
    ?>
    <title>Courses</title>
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
                        <h1 class="h3 mb-0 text-gray-800">Courses</h1>
                        <a href="new_course.php" class="btn btn-primary btn-user">
                                            <i class="fa fa-plus fa-fw"></i>
                                        </a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                                For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <!-- <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                                </div> -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                    
                                            <tr>
                                                    <th>Course Code</th>
                                                    <th>Course Title</th>
                                                    <th>Faculty</th>
                                                    <th>Level</th>
                                                    <th>Credit</th>
                                                    <th>Semester</th>
                                                    <th>Edit</th>
                                                    <th>New Exam</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                <th>Course Code</th>
                                                    <th>Course Title</th>
                                                    <th>Faculty</th>
                                                    <th>Level</th>
                                                    <th>Edit</th>
                                                    <th>Credit</th>
                                                    <th>Semester</th>
                                                    <th>New Exam</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>

                                            <?php loadCourses();?>











                                            
                                               
                                            </tbody>
                                        </table>
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
    require_once("includes/delete_modal.php");

    
    ?>

    <?php
    require_once("includes/js_includes.php");
    require_once("includes/data_tables.php");
    ?>

</body>

</html>
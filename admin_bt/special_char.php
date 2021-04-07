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
    <title>
        HTML Special Characters Page
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
                            SPECIAL CHARACTERS
                        </h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">










                        <!-- <div class="table-responsive">
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

                                    <tr>
                                        <td>EBR101</td>
                                        <td><a href="course_detail.php?id=2&coursename=Ebere"> Ebere</a></td>
                                        <td>Education Foundation</td>
                                        <td>600</td>
                                        <td>6</td>
                                        <td>1</td>
                                        <td><a href="edit_course.php?id=2&coursename=Ebere&creditload=6&faculty=Education Foundation&level=6&semester=1&code=EBR101&edit=1"><i class="fa fa-edit"></i></a></td>
                                        <td><a href="new_exam.php?id=2&coursename=Ebere"><i class="fa fa-plus"></i></a></td>
                                        <td><a href="delete_course.php?id=2" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->



                        <?php require_once("includes/special_char_table.php"); ?>












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
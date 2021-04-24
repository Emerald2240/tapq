<?php
require_once "../config/connect.php";
require_once "../functions/functions.php";

if (!isset($_SESSION['log'])) {
    header('location:login.php');
    exit();
}

//echo '<pre>';
//print_r($_SESSION);

processQandA($_POST, $_SESSION['course_id'],  $_SESSION['admin_id'],  $_SESSION['exam']['year'],   $_SESSION['exam']['number_of_questions'],  $_SESSION['exam']['lecturer'], $_SESSION['exam']['format'],  $_SESSION['exam']['duration'], $_SESSION['exam']['instructions']);
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

    <!-- <link rel="stylesheet" href="luckmoshy-bootstrap-pagination/bootstrapmin.css"> -->

    <style>
        /* body { } */
        .page-mimi {
            display: none;
        }

        .page-active {
            display: block;
        }

        .jumbotron {
            height: 400px;
        }

        .space {
            margin: 10px;
            padding: 10px;
        }

        /* #question {
            height: 100px;
            background-color: pink;
        }

        #answer {
            height: 60px;
            background-color: gray;
            color: white;
        } */

        #jsonta {
            height: 500px;
        }
    </style>


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
                            echo $_SESSION['course_name'] . ' -> 2019/2020 -> First Semester';
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

                            <!-- <div id="editor">
                               
                            </div> -->

                            <div class="card-body">
                                <div class="container-lg">
                                    <form action=<?= $_SERVER["PHP_SELF"]; ?> method="post" enctype="multipart/form-data" class="json" id="json">
                                        <div class="form-group"></div>
                                        <?php
                                        createQuestionAndAnswerBoxes($_SESSION['exam']['number_of_questions']);
                                        ?>
                                        <ul id="luckmoshy" class="pagination justify-content-center pagination-md"></ul>

                                        <p class="missing_num text-danger" id="missing_num"></p>

                                        <div class="form-group m-4">
                                            <label for="jsonta">Click to Preview</label>
                                            <textarea onclick="validateNewExamForm(<?php echo $_SESSION['exam']['number_of_questions'] ?>)" class="form-control jsonta" readonly name="jsonta" id="jsonta" required></textarea>

                                        </div>


                                        <button type="submit" onclick="validateNewExamForm(<?php echo $_SESSION['exam']['number_of_questions'] ?>)" class="btn btn-danger btn-user btn-block" id="submit" name="submit">Submit</button>
                                        <!-- <button type="submit" onclick="validateNewExamForm(10)" class="btn btn-primary btn-user btn-block" id="submit" name="submit">Submit</button> -->
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


    <?php require_once("includes/luckymoshy.php") ?>
    <!-- <?php require("includes/ck_editor.php") ?> -->
    <?php require_once("includes/js_includes.php") ?>
    <?php require_once("includes/data_tables.php"); ?>


    <!-- <script>
        var size = <?php echo $_SESSION['exam']['number_of_questions'] ?>;
        var num = 1;
        let appEditorQ;
        do {
            ClassicEditor
                .create(document.querySelector('#question' + num), {
                    //toolbar: [ 'heading', '|', 'bold', 'italic', /*'link',*/ 'specialCharacters' ]
                })
                .then(editor => {
                    window.editor = editor;
                    appEditorQ = editor;
                })
                .catch(err => {
                    console.error(err.stack);
                })
            num++;
        }
        while (num <= size);
    </script> -->

    <!-- <script>
        var size = <?php echo $_SESSION['exam']['number_of_questions'] ?>;
        var num = 1;
        let appEditorA;
        do {
            ClassicEditor
                .create(document.querySelector('#answer' + num), {
                    //toolbar: [ 'heading', '|', 'bold', 'italic', /*'link',*/ 'specialCharacters' ]
                })
                .then(editor => {
                    window.editor = editor;
                    appEditorA = editor;
                })
                .catch(err => {
                    console.error(err.stack);
                })
            num++;
        }
        while (num <= size);
    </script> -->

</body>

</html>
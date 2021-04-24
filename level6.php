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
    <title>TA Past Questions 600 Level Page</title>
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
                        <h2>Sixth Year</h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container-lg">
                <form>
                    <div class="form-group row">
                        <div class="col-sm-11 p-2">
                            <input type="text" class="form-control" type="search" placeholder="Enter Course">
                        </div>
                        <div class="col-sm-1 p-2 ">
                            <button class="btn btn-outline-info" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>













            <!-- <div class="container-lg">
                <nav aria-label="...">
                    <ul class="pagination mt-5">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">A</a></li>
                        <li class="page-item" aria-current="page">
                            <a class="page-link" href="#">B <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">C</a></li>
                        <li class="page-item"><a class="page-link" href="#">D</a></li>
                        <li class="page-item"><a class="page-link" href="#">E</a></li>
                        <li class="page-item"><a class="page-link" href="#">F</a></li>
                        <li class="page-item"><a class="page-link" href="#">G</a></li>

                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div> -->

            <div class="container-lg">
                <?php
                loadLevelExamQuestions(6);
                ?>
            </div>

        </div>
        <!-- Service End -->


        <!-- Feature Start -->

        <!-- Feature End -->


        <!-- Pricing Plan Start -->

        <!-- Pricing Plan End -->


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
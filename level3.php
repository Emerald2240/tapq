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
    <title>TA Past Questions 300 Level Page</title>
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
                        <h2>Third Year</h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Service Start -->
        <div class="service">
            <!-- <div class="container-lg">
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
            </div> -->










            <div class="container-lg">
                <?php
                loadLevelExamQuestions(3);
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
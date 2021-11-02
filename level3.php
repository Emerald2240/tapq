<?php
require_once "config/connect.php";
require_once "functions/functions.php";
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>TA PAST QUESTIONS 300 LEVEL PAGE</title>
    <meta name="description" content="TAPQ Year Three Page">
    <!-- <meta property='og:title' content="TA PAST QUESTIONS HOME PAGE"> -->
    <meta property='og:url' content="https://techac.net/tapq/level3.php">
    <!-- <meta property='og:image' itemprop="image" content="https://techac.net/tatb/assets/images/mike.jpg"> -->
    <meta property='keywords' content="Tech Acoustic, year 3, 300 Level, Past Questions, TAPQ, Levels, ESUT, Engineering, Tech, Science, Computers">
    <meta name="author" content="Orji Michael Chukwuebuka at Tech Acoustic">
    <?php
    require_once "includes/head.php";
    ?>
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

            <div class="container-lg course_head">
                <?php
                loadLevelExamQuestions(3);
                ?>
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
        <!-- Service End -->

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
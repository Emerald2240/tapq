
<?php
//if(isset($_SESSION['username'])){
//header('location:admin.php');
//exit();}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "../includes/head.php";
    ?>
</head>

<body>
    <div class="wrapper">
        <!-- Header Start -->
        <?php
        require_once "../includes/header.php";
        ?>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Register as admin</h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <?php
        //require_once "../config/connect.php";
        require_once "../functions/functions.php";
        processRegister($_POST);
        ?>

        <!-- Service Start -->
        <div class="service">
            <div class="container-lg">
                <form action=<?= $_SERVER["PHP_SELF"]; ?> method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" id="phone">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="form-group">
                        <label for="password1">Confirm Password</label>
                        <input type="password" name="password1" class="form-control" id="password1">
                    </div>

                    <div class="form-group">
                        <label for="job">Job Post</label>
                        <select class="form-control" name="job" id="job">
                            <option value="0">Choose Job Post</option>
                            <option value="1">Course Admin</option>
                            <option value="2">Typist</option>
                            <option value="3">Course Supervisor</option>
                            <option value="4">Answer Analyst</option>
                            <option value="5">General Overseer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <span><i class="fab fa-twitter"></i></span>
                        <label for="twitter">Twitter Account Link</label>
                        <input type="text" class="form-control" name="twitter" id="twitter">
                    </div>

                    <div class="form-group">
                        <span><i class="fab fa-facebook"></i></span>
                        <label for="facebook">Facebook Account Link</label>
                        <input type="text" class="form-control" name="facebook" id="facebook">
                    </div>

                    <div class="form-group">
                        <span><i class="fab fa-linkedin"></i></span>
                        <label for="linkedin">LinkedIn Account Link</label>
                        <input type="text" class="form-control" name="linkedin" id="linkedin">
                    </div>

                    <div class="form-group">
                        <span><i class="fab fa-instagram"></i></span>
                        <label for="instagram">Instagram Account Link</label>
                        <input type="text" class="form-control" id="instagram" name="instagram">
                    </div>


                    <div class="form-group">
                        <label for="image">Profile Picture(Optional)</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>



                    <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->

                    <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
        <!-- Service End -->


        <!-- Feature Start -->

        <!-- Feature End -->


        <!-- Pricing Plan Start -->

        <!-- Pricing Plan End -->


        <!-- Footer Start -->
        <?php
        require_once "../includes/footer.php";
        ?>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php
    require_once "../includes/scripts.php";
    ?>
</body>

</html>
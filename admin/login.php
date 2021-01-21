<!-- <?php
require_once "../config/connect.php";
require_once "../functions/functions.php";
//processLogin($_POST);
?> -->

<!-- <?php
if(isset($_SESSION['username'])){
header('location:admin.php');
exit();
}
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>
    <form action="<?=$_SERVER["PHP_SELF"]; ?>" method="post">
        <p>
        <input type="email" placeholder="Enter Email" name="email">
        </p>

        <p>
        <input type="password" placeholder="Enter Password" name="password">
        </p>

        <p>
        <input type="submit" value="Submit" name="submit">
        </p>
    </form>
</body>
</html>
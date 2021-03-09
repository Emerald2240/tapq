<?php

require_once "../config/connect.php";
require_once "../functions/functions.php";

if (!isset($_SESSION['log'])) {
    header('location:login.php');
    exit();
}
//this code snippet sets the coursename and id variables to the session global array, this is so the data is retained even when the page is refreshed
if (isset($_GET['course_id'])) {
    $_SESSION['course_id'] = $_GET['id'];
}
deleteCourse();
?>
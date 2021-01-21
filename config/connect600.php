<?php

$db6 = new mysqli("localhost","root","","mike");

if($db6->connect_error){
die("Error Occured".$db6->connect_error);
}else{
    //echo "Connection Established";
}

?>
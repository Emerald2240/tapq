<?php

$db5 = new mysqli("localhost","root","","mike");

if($db5->connect_error){
die("Error Occured".$db5->connect_error);
}else{
    //echo "Connection Established";
}

?>
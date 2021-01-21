<?php

$db1 = new mysqli("localhost","root","","mike");

if($db1->connect_error){
die("Error Occured".$db1->connect_error);
}else{
    //echo "Connection Established";
}

?>
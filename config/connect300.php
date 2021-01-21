<?php

$db3 = new mysqli("localhost","root","","mike");

if($db3->connect_error){
die("Error Occured".$db3->connect_error);
}else{
    //echo "Connection Established";
}

?>
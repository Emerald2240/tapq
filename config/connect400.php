<?php

$db4 = new mysqli("localhost","root","","mike");

if($db4->connect_error){
die("Error Occured".$db4->connect_error);
}else{
    //echo "Connection Established";
}

?>
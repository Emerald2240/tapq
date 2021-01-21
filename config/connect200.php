<?php

$db2 = new mysqli("localhost","root","","mike");

if($db2->connect_error){
die("Error Occured".$db2->connect_error);
}else{
    //echo "Connection Established";
}

?>
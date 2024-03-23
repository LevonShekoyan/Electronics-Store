<?php 

$db = mysqli_connect('localhost','root','','levon_final');

if(!$db){
    die("failed".mysqli_connect_error());
    exit();
}

?>
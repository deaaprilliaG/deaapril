<?php
session_start();
$conn = mysqli_connect("localhost","root","","SIM");

if($conn){
    echo 'berhasil' ;
}

 ?>
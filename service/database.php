<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name= "e-report_2";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error){
    echo "Gagal terkoneksi";
}
?>
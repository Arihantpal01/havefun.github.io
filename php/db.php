<?php
$s = 'localhost';
$u = 'root';
$p = '';
$db = 'usersdata';

$conn = mysqli_connect($s,$u,$p,$db);

if(!$conn){
    die("Failed".mysqli_connect_error());
}



?>
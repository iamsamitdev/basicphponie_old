<?php
$host   = "localhost";
$user   = "root";
$pass   = "1234";
$dbname = "demodb";
$port   = 3306;

$connect = mysqli_connect($host,$user,$pass,$dbname,$port);
mysqli_set_charset($connect, 'utf8'); // เข้ารหัส utf8

if($connect){
   // echo "Connect Database Success";
}else{
    echo "Connect Database Fail!!";
}

// ตรวจ error ที่เกิดขึ้น
if(mysqli_connect_errno()){
    echo mysqli_connect_errno();
    exit();
}

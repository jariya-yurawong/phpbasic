<?php
$severname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbemp';

$conn = mysqli_connect($severname,$username,$password,$dbname);
mysqli_set_charset($conn, "utf8"); 
/*
if (!$conn) {
    die("Connection : failed (เชื่อมต่อฐานข้อมูลล ไม่ สำเร็จ)" . mysqil_connect_error());
}else{
    echo "Connection : ok (เชื่อมต่อฐานข้อมลูสำเร็จ)";
}

mysqli_close($conn); // ปิดฐานข้อมูล
*/
?>
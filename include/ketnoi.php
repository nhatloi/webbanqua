<?php

$hostName = 'MYSQL5045.site4now.net';
// khai báo biến username
$userName = 'a73bcf_traicay';
//khai báo biến password
$passWord = '1q2w3e4r';
// khai báo biến databaseName
$databaseName = 'db_a73bcf_traicay';
$conn = mysqli_connect($hostName, $userName, $passWord , $databaseName) or die ('Không thể kết nối tới database');
?>

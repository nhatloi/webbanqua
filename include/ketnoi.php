<?php

$hostName = 'MYSQL5047.site4now.nett';
// khai báo biến username
$userName = 'a771dc_dtdm';
//khai báo biến password
$passWord = '1q2w3e4r';
// khai báo biến databaseName
$databaseName = 'db_a771dc_dtdm';
$conn = mysqli_connect($hostName, $userName, $passWord , $databaseName) or die ('Không thể kết nối tới database');
?>

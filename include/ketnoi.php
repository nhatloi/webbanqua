<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'traicay');
//khai báo biến host
$hostName = 'mysql5039.site4now.net';
// khai báo biến username
$userName = 'a706a4_traicay';
//khai báo biến password
$passWord = '1q1q2w3e4r';
// khai báo biến databaseName
$databaseName = 'db_a706a4_traicay';
$conn = mysqli_connect($hostName, $userName, $passWord , $databaseName)
//"Driver={MySQL ODBC 5.1 Driver};Server=MYSQL5039.site4now.net;Database=db_a706a4_traicay;Uid=a706a4_traicay;Password=YOUR_DB_PASSWORD"
?>

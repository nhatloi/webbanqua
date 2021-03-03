<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'traicay');
//khai báo biến host
$hostName = 'MYSQL5039.site4now.net';
// khai báo biến username
$userName = 'a706a4_traicay';
//khai báo biến password
$passWord = 'YOUR_DB_PASSWORD';
// khai báo biến databaseName
$databaseName = 'db_a706a4_traicay';
$conn = mysqli_connect($hostName, $userName, $passWord , $databaseName) or die ('Không thể kết nối tới database');
//"Driver={MySQL ODBC 5.1 Driver};Server=MYSQL5039.site4now.net;Database=db_a706a4_traicay;Uid=a706a4_traicay;Password=YOUR_DB_PASSWORD"
?>

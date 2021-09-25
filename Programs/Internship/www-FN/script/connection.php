<?php
//連接資料庫
$con = mysqli_connect("localhost","root","","fn") or die('連線失敗: ' . mysql_error()); 
mysqli_query($con, 'SET NAMES utf8');  //送出UTF8編碼的MySQL指令
?>
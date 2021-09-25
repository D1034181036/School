<?php session_start(); ?>

<?php
if(@$_SESSION['admin_id']==null){
header("Location: ../index.php?msg=請先登入");
}
?>

<?php include '../../../script/connection.php';  //連接資料庫 ?>

<?php
$create_datetime=date('Y-m-d H:i:s');
$sql = "INSERT INTO `playlist` (singer,title,memo,createid,create_datetime) VALUES ('$_POST[singer]','$_POST[title]','$_POST[memo]','$_SESSION[admin_id]','$create_datetime')";
$result = mysqli_query($con, $sql);
//echo $sql;
header("Location: ../list.php");
?>
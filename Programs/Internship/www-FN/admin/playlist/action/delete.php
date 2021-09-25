<?php session_start(); ?>

<?php
if(@$_SESSION['admin_id']==null){
header("Location: ../index.php?msg=請先登入");
}
?>

<?php include '../../../script/connection.php';  //連接資料庫 ?>

<?php
$sql="SELECT * FROM playlist WHERE `no`='$_GET[no]'";
if ( $result = mysqli_query($con, $sql) ) {
	while($row = mysqli_fetch_assoc($result)){
		if($_SESSION['admin_id']==$row['createid']){
			$sql = "UPDATE `playlist` SET `isdeleted`='2' WHERE `no`='$_GET[no]'";
			$result = mysqli_query($con, $sql);
		}
	}
}


//echo $sql;
header("Location: ../list.php");
?>
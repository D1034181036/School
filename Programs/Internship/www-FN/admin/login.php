<?php 

session_start();
include './../script/connection.php';  //連接資料庫

@$id = $_POST['id'];
@$pw = md5($_POST['pw']);

$sql="SELECT * FROM member WHERE id='$id' and pw='$pw'";

if ( $result = mysqli_query($con, $sql) ) {
	if($row = mysqli_fetch_assoc($result)){
		$_SESSION['admin_id']=$row["id"];
		$_SESSION['admin_name']=$row["name"];			
		//$_SESSION['admin_level']=$row["rightlevel"];
		header("Location: playlist/list.php");
	}else{
		$msg='帳號密碼錯誤';
		header("Location: index.php?msg=$msg");
	}
}

?>
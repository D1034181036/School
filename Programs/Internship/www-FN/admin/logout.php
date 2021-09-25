<?php session_start(); ?>

<?php
//將session清空
unset($_SESSION['admin_id']);
unset($_SESSION['admin_name']);
//echo '登出中';
header("Location: index.php?msg=成功登出");
?>
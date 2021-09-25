<?php session_start(); ?>
<?php
if(@$_SESSION['admin_id']==null){
header("Location: ../index.php?msg=請先登入");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- RWD -->
    <meta name="viewport" content="width=device-width, initial-scale=0.5" />
    <!-- 最新編譯和最佳化的 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- 選擇性佈景主題 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <!-- 最新編譯和最佳化的 JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <!-- 自訂 -->
    <link rel="stylesheet" href="../../css/base.css">
    <script type="text/javascript" src="../../js/base.js"></script>
</head>
<body>
<?php include '../../script/connection.php';  //連接資料庫 ?>
<div class="container">
    <h3>登入帳號 - <?php echo @$_SESSION['admin_id'];?>
    <input class="btn-warning btn-md" type="button" value="登出" onclick="location.href='../logout.php'">
    </h3>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">FNの日本語神曲</h3>
                <div class="pull-right">
                    <input class="btn-warning btn-md" type="button" value="取消動作" onclick="location.href='list.php'">
                    <!--<button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> 搜尋</button>-->
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="singer" disabled></th>
                        <th><input type="text" class="form-control" placeholder="title" disabled></th>
                        <th><input type="text" class="form-control" placeholder="memo" disabled></th>
                        <th><input type="text" class="form-control" placeholder="createid" disabled></th>
                        <th><input type="text" class="form-control" placeholder="create_datetime" disabled></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $sql="SELECT * FROM playlist WHERE `no`='$_GET[no]'";
                if ( $result = mysqli_query($con, $sql) ) {
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <form name="fomr1" method="post" action="action/save.php">
                    <tr>
                        <td><?php echo $row['no'];?><input type="hidden" name="no" value="<?php echo $row['no'];?>"></td>
                        <td><input type="text" name="singer" value="<?php echo $row['singer'];?>"></td>
                        <td><input type="text" name="title" value="<?php echo $row['title'];?>"></td>
                        <td><input type="text" name="memo" value="<?php echo $row['memo'];?>"></td>
                        <td><?php echo $row['createid'];?></td>
                        <td><?php echo $row['create_datetime'];?></td>
                        <td><input class="btn-danger" type="submit" value="確定修改"></td>
                    </tr>
                </form>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
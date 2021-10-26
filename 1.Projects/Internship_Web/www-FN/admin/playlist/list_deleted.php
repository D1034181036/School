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
    <script type="text/javascript" src="../../js/jquery.tablesorter.js"></script>
    <script type="text/javascript">
    $(document).ready(function() 
        { 
            //$("#tablesorter").tablesorter(); 
        } 
    ); 
    </script>
</head>
<body>
<?php include '../../script/connection.php';  //連接資料庫 ?>
<div class="container">
    <h3>登入帳號 - <?php echo @$_SESSION['admin_id'];?>
    <input class="btn-warning btn-md" type="button" value="登出" onclick="location.href='../logout.php'">
    <input class="btn-default btn-md" type="button" value="返回" onclick="location.href='list.php'">
    </h3>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">FNの日本語神曲</h3>
                <div class="pull-right">
                    <input class="btn-success btn-md" type="button" value="新增" onclick="location.href='create.php'">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> 搜尋</button>
                </div>
            </div>
            <table id="tablesorter" class="table">
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
                $sql="SELECT * FROM playlist WHERE `isdeleted`='2'";
                if ( $result = mysqli_query($con, $sql) ) {
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $row['no'];?></td>
                        <td><?php echo $row['singer'];?></td>
                        <td><?php echo $row['title'];?></td>
                        <td><?php echo $row['memo'];?></td>
                        <td><?php echo $row['createid'];?></td>
                        <td><?php echo $row['create_datetime'];?></td>
                <?php
                    if($_SESSION['admin_id']==$row['createid']){
                ?>
                        <td><input class="btn-danger" type="button" value="復原" onclick="location.href='action/recovery.php?no=<?php echo $row['no'];?>'"></td>
                    </tr>
                <?php
                        }
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
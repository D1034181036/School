<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- RWD -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- 最新編譯和最佳化的 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- 選擇性佈景主題 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <!-- 最新編譯和最佳化的 JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <!-- 自訂 -->
    <link rel="stylesheet" href="css/base.css">
    <script type="text/javascript" src="js/base.js"></script>
    <script type="text/javascript" src="js/jquery.tablesorter.js"></script>
    <script type="text/javascript">
    $(document).ready(function() 
        { 
            //$("#tablesorter").tablesorter(); 
        } 
    ); 
    </script>
</head>
<body>
<?php include 'script/connection.php';  //連接資料庫 ?>
<div class="container">
    <h3></h3>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">FNの日本語神曲</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> 搜尋</button>
                </div>
            </div>
            <table id="tablesorter" class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="singer" disabled></th>
                        <th><input type="text" class="form-control" placeholder="title" disabled></th>
                        <th><input type="text" class="form-control" placeholder="memo" disabled></th>
                        <th><input type="text" class="form-control" placeholder="createid" disabled></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $sql="SELECT * FROM playlist WHERE `isdeleted`='1'";
                if ( $result = mysqli_query($con, $sql) ) {
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $row['singer'];?></td>
                        <td><?php echo $row['title'];?></td>
                        <td><?php echo $row['memo'];?></td>
                        <td><?php echo $row['createid'];?></td>
                    </tr>
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
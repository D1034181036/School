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
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue to FNの日本語神曲</h1>
            <div class="account-wall">
                <img class="profile-img" src="../css/hifumi.jpg" alt="">
                <form name="form" class="form-signin" method="post" action="login.php">
                	<input name="id" type="text" class="form-control" placeholder="ID" required autofocus>
                	<input name="pw" type="password" class="form-control" placeholder="Password" required>
                	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>
            <h4 class="text-center login-error"><?php if(isset($_GET['msg']))echo $_GET['msg'];?></h1>
            <!-- <a href="#" class="text-center new-account">Create an account</a> -->
        </div>
    </div>
</div>

</body>
</html>
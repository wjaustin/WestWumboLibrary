<?php
include('./scripts/log.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: checkout.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <?php include './html/header.html'; ?>
    <Title>Login</Title>
    <link href="./css/SolidSidenav.css" rel="stylesheet" />	</head>
<body>
    <?php include './html/navbar.php'; ?>
     
    <div id="wrapper">   
        <h2 style="margin-left: 3%">Log in.</h2>   
        <h4 style="margin-left: 3%">Use a library account to log in.</h1>
        <hr>
            <div class="row col-md-2" style="left: 5%;">
                <form action="" method="post">
                    <div class="form-group row">
                        <label for="usernameInput">Username</label>
                        <input name="username" type="text" class="form-control" id="username"  placeholder="Library Card #">
                    </div>
                    <div class="form-group row">
                        <label for="passwordInput">Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group row">
                        <button name="submit" type="submit" class="btn btn-secondary">Log in</button>
                    </div>
                    <span><?php echo $error; ?></span>
                </form>
            </div> 
    </div>
</body>
</html>
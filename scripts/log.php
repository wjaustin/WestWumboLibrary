<?php
session_start();
$error='';
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else {
        $con = mysqli_connect("localhost", "root", "", "library");
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $query = mysqli_query($con, "select * from patrons where patron_username='$username' and patron_password='$password';");
        $rows = mysqli_num_rows($query);
        if($rows == 1){
            $_SESSION['login_user']=$username;
            header("location: checkout.php");
        }else{
            $error = "Incorrect Username or Password";       
        }
        mysqli_close($con);
    }
}
?>
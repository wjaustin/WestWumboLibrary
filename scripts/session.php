<?php
$con = mysqli_connect("localhost", "root", "", "library");
session_start();// Starting Session
$user_check = $_SESSION['login_user'];
$query = mysqli_query($con, "select patron_username from patrons where patron_username='$user_check';");
$rows = mysqli_num_rows($query);
if(!isset($rows)){
    mysqli_close($con); // Closing Connection
    header('Location: index.php'); // Redirecting To Home Page
}
?>
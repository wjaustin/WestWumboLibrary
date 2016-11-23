<?php
session_start();

// Check user is logged in, stop execution if they aren't
if(!isset($_SESSION['login_user'])){
    die("User not logged in");
}

// Create connection to MySql Database
$con = mysqli_connect("localhost", "wjaustin", "", "library");
if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$library_card_id = $_SESSION['login_user'];
$result = mysqli_query($con, "select date_due, rem_renewals, rental_id 
from rented_book where library_card_id = $library_card_id;");

$checkbox = $_POST['checkbox0'];

$num = 0;
while (isset($checkbox)) {
    if ($checkbox == 1) {
        // Checkbox is checked, renew this book
        $row = $result->fetch_assoc();
        //$rem_renewals = $row["rem_renewals"];
        $rem_renewals = $row["rem_renewals"];
        if($rem_renewals > 0) {
            // Remaining renewals is greater than 0, continue with renewal
            $rem_renewals -= 1;
            $rental_id = $row["rental_id"];
            $output = mysqli_query($con, "update rented_book set date_due = date_add(curdate(), interval 7 day), rem_renewals = $rem_renewals where rental_id = $rental_id;");
            if(! $output) {
                error_log("Failed to renew book for rental_id=$rental_id, library_card_id=$library_card_id");
                $_SESSION['error_msg'] = "Failed to renew book";
            }
        }
    }
    $num += 1;
    $checkbox = $_POST['checkbox' . $num];
}
header("Location: ../checkout.php");
?>
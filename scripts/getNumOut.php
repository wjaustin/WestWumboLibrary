<?php
// Create connection to MySql Database
$con = mysqli_connect("localhost", "wjaustin", "", "library");
if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$library_card_id = $_SESSION['login_user'];
$result = mysqli_query($con, "select * from rented_book where library_card_id=$library_card_id;");
$asdf = mysqli_num_rows($result);
if ($asdf == 1) {
    echo "You currently have 1 book checked out.";
} else if ($asdf > 1) {
    echo "You currently have " . $asdf . " books checked out.";
} else {
    echo "You currently have 0 books checked out.";
}
?>
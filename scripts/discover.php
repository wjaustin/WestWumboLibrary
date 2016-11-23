<?php
session_start();
$error='';
if (isset($_POST['submit'])) {
    if (empty($_POST['search'])) {
        $error="Please enter something in the search form";
    }
    else {
        $con = mysqli_connect("localhost", "wjaustin", "", "library");
        $searchTerm = mysqli_real_escape_string($con, $_POST['search']);
        $query = mysqli_query($con, "select * from book where book_title LIKE '%".$searchTerm."%';");
        if(mysqli_num_rows($query) > 0){ // if one or more rows are returned do following
        }
        else{ // if there is no matching rows do following
            $result="No results";
        }
    }
}
?>

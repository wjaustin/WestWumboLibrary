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
        $query = mysqli_query($con, "select * from book where book_title LIKE '%".$searchTerm."%' or isbn='$searchTerm';");
        if(mysqli_num_rows($query) > 0){ // if one or more rows are returned do following
            $i=0;
            while($results = mysqli_fetch_array($query)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                
                //$result[i]="<p><h3>".$results['book_title']."</h3>".$results['isbn']."</p>";
                $bookTitle[i]=$results['book_title'];
                $bookISBN[i]=$results['isbn'];
                // posts results gotten from database(title and text) you can also show id ($results['id']
                $i++;
            }
        }
        else{ // if there is no matching rows do following
            $result="No results";
        }
    }
}
?>

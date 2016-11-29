<?php
// Create connection to MySql Database
$con = mysqli_connect("localhost", "wjaustin", "", "library");
if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$library_card_id = $_SESSION['login_user'];
$result = mysqli_query($con, "select CURDATE(), r.rental_id, bc.book_id, r.date_due, a.author_fname, a.author_lname, r.library_card_id, b.book_title, r.rem_renewals 
from rented_book r 
LEFT JOIN book_copy bc 
ON r.book_id=bc.book_id 
LEFT JOIN book b 
on b.isbn=bc.ISBN
LEFT JOIN author a
on b.author_id=a.author_id
where r.library_card_id=$library_card_id;");

// If no rented books, halt execution
if ($result->num_rows == 0) {
    die();
}
// Loop through each row and create a HTML table for it
$num = 0;
while ($row = $result->fetch_assoc()) {
    echo '<div class="form-group row" style="background-color: EEEEEE;">
                        <div class="checked-out-item">
                                <div class ="form-group row">
                                    <h4><b>';
                                        // Book Title
                                        echo $row["book_title"];
                                        echo '</b></h4>
                                </div>
                                <div class ="form-group row">
                                    <h4 style="display: inline; float: left;">';
    // Book Author
    echo $row["author_fname"] . ' ' . $row["author_lname"];
    if ($row["CURDATE()"] > $row["date_due"]) {
        echo '<h4 align="right">overdue</h4>';
    } elseif ($row["rem_renewals"] > 0) {
    echo '</h4>                
                                    <h4 name=checkbox' . $num . ' class = "checked-out-checkbox" align="right"><label class="checkbox-inline">';
                                    // Creation of checkboxes, specifying a posted value 0 if unchecked and 1 if checked
                                    echo '<input type="hidden" value="0" name="checkbox' . $num . '">';
                                    echo '<input type="checkbox" value="1" name="checkbox' . $num . '">';
                                    echo 'renew</label></h4>';
    }
                                        // Book Due Date and Remaining Renewals
                                        echo ' </div><div class ="form-group row"><h4>Due: ' . $row["date_due"] . ' / ' . $row["rem_renewals"] . ' Renewals Remaining';
                                        echo '</h4>      
                                </div>
                        </div>
                    </div>';
    $num += 1;
}
echo '<div class="form-group row">
                        <button type="submit" class="btn btn-secondary" style="float:right">Renew</button>
                    </div>';
?>
<?php
// Create connection to MySql Database
$con = mysqli_connect("localhost", "wjaustin", "", "library");
if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$library_card_id = $_SESSION['login_user'];
$result = mysqli_query($con, "select book.book_title, author.author_fname, author.author_lname, rented_book.date_due, rented_book.rem_renewals 
from rented_book, book_copy, book, author where library_card_id = $library_card_id;");

// If no rented books, halt execution
if ($result->num_rows == 0) {
    die();
}

// Loop through each row and create a HTML table for it
$num = -1;
while ($row = $result->fetch_assoc()) {
    $num += 1;
    echo '<div class="form-group row" style="background-color: EEEEEE;">
                        <div class="checked-out-item">
                            <form>
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
    echo '</h4>                
                                    <h4 name=checkbox class = "checked-out-checkbox" align="right"><label class="checkbox-inline">';
                                    // Creation of checkboxes, specifying a posted value 0 if unchecked and 1 if checked
                                    echo '<input type="hidden" value="0" name="checkbox' . $num . '">';
                                    echo '<input type="checkbox" value="1" name="checkbox' . $num . '">';
                                    //echo '<input type="checkbox" ';
                                    //echo 'name=checkbox' . $num;
                                    //echo '>renew</label></h4>
                                    echo 'renew</label></h4>
                                </div>
                                <div class ="form-group row">
                                    <h4>';
    // Book Due Date and Remaining Renewals
    echo 'Due: ' . $row["date_due"] . ' / ' . $row["rem_renewals"] . ' Renewals Remaining';
    echo '</h4>      
                                </div>
                            </form>
                        </div>
                    </div>';
}
echo '<div class="form-group row">
                        <button type="submit" class="btn btn-secondary" style="float:right">Renew</button>
                    </div>';
?>
<?php
session_start();
// Check user is logged in, stop execution if they aren't
if(!isset($_SESSION['login_user'])){
    die("User not logged in");
    
} else {
    // Check if the 'amount' variable was posted from the HTML form
    if (! empty($_POST['amount'])) {
        $amount = $_POST['amount'];
        $pattern = '/^[0-9]{1,3}(?:,?[0-9]{3})*\.[0-9]{2}$/';
        // Check that the formatting of the 'amount' variable is correct
        if (preg_match($pattern, $amount) == 1) {
            
            // Connect to database
            $con = mysqli_connect("localhost", "wjaustin", "", "library");
            if ($conn -> connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $library_card_id = $_SESSION['login_user'];
            $result = mysqli_query($con, "select patron_balance from patron where library_card_id = $library_card_id;")->fetch_object()->patron_balance;
            if ($amount > $result) {
                // TODO ERROR: CAN'T PAY MORE THAN AMOUNT DUE
                echo 'CAN\'T PAY MORE THAN IS DUE: ' . $amount . '>' . $result;
            } else {
                $result -= $amount;
                $result = mysqli_query($con, "update patron set patron_balance='$result' where library_card_id = $library_card_id;");
                if ($result) {
                    header("Location: ../fees.php");
                } else {
                    // TODO ERROR: FAILED TO UPDATE
                    echo 'FAILED TO UPDATE BALANCE';
                }
            }
        
        } else {
            // TODO THROW ERROR: AMOUNT NOT PROPERLY FORMATTED
            echo 'AMOUNT IMPROPERLY FORMATTED';
        }
        
    } else {
        // TODO THROW ERROR: NO AMOUNT PROVIDED
        echo 'NO AMOUNT PROVIDED';
    }
}
?>
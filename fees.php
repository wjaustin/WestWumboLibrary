<?php
session_start();
include('./scripts/session.php');
?>
<head>
    <?php include './html/header.html'; ?>
    <Title>Checkout</Title>
    <link href="./css/SolidSidenav.css" rel="stylesheet" />
    <link href="./css/checkout.css" rel="stylesheet" />
</head>

<body>
<?php include './html/navbar.php'; ?>
<div id="wrapper">
    <h2 style="margin-left: 3%">Fees</h2>   
    <h4 style="margin-left: 3%"></h4>
    <hr>
    <div class="row col-md-6" style="left: 5%;">    
        <form>
            <div class="form-group row">    
                <h4 align="center">Account Fees: 
                <?php
                // Create connection to MySql Database
                $con = mysqli_connect("localhost", "wjaustin", "", "library");
                if ($conn -> connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $library_card_id = $_SESSION['login_user'];
                $result = mysqli_query($con, "select patron_balance from patron where library_card_id = $library_card_id;")->fetch_object()->patron_balance;
                echo '$' . $result;
                ?>
                </h4>
            <!-- Payment information is placeholder and will not be implemented for this project -->
            </div>    
             <div class="form-group row" style="background-color: EEEEEE;">
                <div class="checked-out-item">
                    <form>
                        <div class ="form-group row">
                            <h3 align="center"><b>Payment Information</b></h3>
                        </div>
                        <div class="form-group row">
                            <label for="name">Amount to pay</label>
                            <input id="name" type="text" class="form-control" style="width: 15%;">
                        </div>
                        <div class="form-group row">
                            <label for="name">Full Name as appears on card</label>
                            <input id="name" type="text" class="form-control" style="width: 50%;">
                        </div>
                       <div class="form-group row">
                            <label for="credit">Credit Card Number</label>
                            <input id = "credit" type="text" class="form-control" style="width: 50%;">
                        </div>
                        <div class="form-group row">
                            <label for="ccv">CCV</label>
                            <input id="ccv"type="text" class="form-control" style="width: 15%;">
                        </div>
                        <div class="form-group row">
                            <label for="ed">Expiration Date</label>
                            <input id="ed" type="text" class="form-control" style="width: 15%;">
                        </div>
                    </form>
                </div>
            <div class="form-group row">
                <button type="button" class="btn btn-secondary" style="float:right; margin-right:30px;" id="paybtn">Submit Payment</button>
            </div>
            </div>
                       
        </form>
    </div>      
</div>
</body>
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
<?php include 'navbar.php'; ?>
<div id="wrapper">
    <h2 style="margin-left: 3%">Checked Out</h2> 
    <?php
        if(!isset($_SESSION['login_user'])){
            echo '<h4 style="margin-left: 3%">Please login to view checked out items</h4>';
        }else{
            echo '    
            <h4 style="margin-left: 3%"></h4>
            <hr>
            <div class="row col-md-6" style="left: 5%;">    
                <form action="./scripts/renew.php" method="post">
                    <div class="form-group row">    
                        <h4>';
                        include('./scripts/getNumOut.php');
                        include('./scripts/generateRenewTables.php');
                        echo '
                </form>
            </div>';
        }
    ?>

      
</div>
</body>
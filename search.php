<?php
session_start();
include('./scripts/session.php');
?>
<head>
    <?php include './html/header.html'; ?>
    <Title>Checkout</Title>
    <link href="./css/SolidSidenav.css" rel="stylesheet" />
</head>

<body>
<?php include './html/navbar.php'; ?>
<div id="wrapper">
    <h2 style="margin-left: 3%">Search</h2>   
    <h4 style="margin-left: 3%"></h4>
    <hr>
    <div class="row col-md-3" style="left: 5%;">    
         <div class="form-group row">
            <div class="checked-out-item">
                <form action="#" method="post">                    
                    <div class="form-group row">
                        <br>                            
                        <div class="input-group">
                           <input name="search" type="text" class="form-control">
                           <span class="input-group-btn">
                                <button name="submit" class="btn btn-default" type="submit">Search!</button>
                           </span>
                        </div>
                    </div>   
                    <span><?php echo $error; ?></span>
                    <span><?php 
                        if(is_array($bookTitle)){
                            for ($i = 0; $i < count($bookTitle); $i++) {
                                echo $bookTitle[i];
                                echo '<br />';
                                echo $bookISBN[i];
                                echo '<br />';
                            }
                        }else{
                            echo $result;
                        }
                        
                    ?></span>
                </form>
            </div>           
        </div>
    </div>  
</div>
</body>
<?php
session_start();
include('./scripts/session.php');
include('./scripts/discover.php');
?>
<head>
    <?php include './html/header.html'; ?>
    <Title>Search</Title>
    <link href="./css/SolidSidenav.css" rel="stylesheet" />
    <link href="./css/checkout.css" rel="stylesheet" />

</head>

<body>
<?php include 'navbar.php'; ?>
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
                        while($results = mysqli_fetch_array($query)){
                        // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                            
                            //$result[i]="<p><h3>".$results['book_title']."</h3>".$results['isbn']."</p>";
                            echo $results['book_title']. '<br />';
                            echo $results['isbn'];
                            echo '<br /><br />';
                            // posts results gotten from database(title and text) you can also show id ($results['id']
                        }
                        echo $result;
                    ?></span>
                </form>
            </div>           
        </div>
    </div>  
</div>
</body>
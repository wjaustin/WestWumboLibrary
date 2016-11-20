<html>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a>
                    Quick Links
                </a>
            </li>
            
            <li>
                <a href="index.php">Home</a>
            </li>
            <?php
            // Display different navbar elements if the user is logged in vs if the user isn't
            if(isset($_SESSION['login_user'])){
                echo '
            <li>
                <a href="search.php">Search</a>
            </li>
            <li>
                <a href="checkout.php">Checked Out</a>
            </li>
            <li>
                <a href="fees.php">Fees</a>
            </li>                   
            <li>
                <a href="logout.php">Log Out</a>
            </li>';
            } else {
                echo '
            <li>
                <a href="login.php">Log in</a>
            </li>';
            }
            ?>
        </ul>
    </div>        
    <div class="container body-content">            
        <br />                                
    </div>
</div>
</html>
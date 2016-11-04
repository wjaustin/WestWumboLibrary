
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="/css/Navbar.css" rel="stylesheet" />
    <link href="/css/Sidenav.css" rel="stylesheet" />
	<link href="/css/Index.css" rel="stylesheet" />
    
	
</head>
<body background="/img/Background_Books2.png">
    <div class="navbar navbar-default navbar-fixed-top">        
            <div class="navbar-header" style="margin-left: 1%;">                                
            </div>
            <div class="navbar-collapse collapse">               
            </div>
        
    </div>

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
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Search</a>
                </li>
                <li>
                    <a href="#">Checked Out</a>
                </li>
                <li>
                    <a href="#">Fees</a>
                </li>                   
                <li>
                    <a href="#">Log off</a>
                </li>
            </ul>
        </div>        
        <div class="container body-content">            
            <br />        
                
        
            </div>

        @Scripts.Render("~/bundles/jquery")
        @Scripts.Render("~/bundles/bootstrap")
        @RenderSection("scripts", required:=False)

   <h1 style = "font-size: 450%;">Welcome to the West Wumbo Library</h1>            
    <br />

    <div class="row top-buffer librarynews">
        <div class="col-md-10 col-md-offset-1">
            <h2>News</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <br /><br />
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
            </p>
        </div>
    </div>
        <footer>
         <p></p>
        </footer>
    </div>
    </body>
</html>

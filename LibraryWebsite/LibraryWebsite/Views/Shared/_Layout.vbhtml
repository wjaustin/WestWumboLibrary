<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@ViewBag.Title</title>
    @Styles.Render("~/Content/css")
    @Scripts.Render("~/bundles/modernizr")
    <link href="~/CSS/Navbar.css" rel="stylesheet" />
    <link href="~/CSS/Sidenav.css" rel="stylesheet" />
</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top">
        
            <div class="navbar-header" style="margin-left: 1%;">                
                @Html.ActionLink("Wumbo Library", "Index", "Home", Nothing, New With {.[class] = "navbar-brand"})
            </div>
            <div class="navbar-collapse collapse">
                @Html.Partial("_LoginPartial")
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
            @RenderBody()
            <hr />        
                <footer>
                    <p>&copy; @DateTime.Now.Year - Wumbo Library</p>
                </footer>
        
            </div>

        @Scripts.Render("~/bundles/jquery")
        @Scripts.Render("~/bundles/bootstrap")
        @RenderSection("scripts", required:=False)
</body>
</html>

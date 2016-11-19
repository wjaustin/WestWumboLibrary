<head>
    <?php include 'header.html'; ?>
    <link href="./css/SolidSidenav.css" rel="stylesheet" />	</head>
<body>
    <?php include 'navbar.html'; ?>
     
    <div id="wrapper">   
        <h2 style="margin-left: 3%">Log in.</h2>   
        <h4 style="margin-left: 3%">Use a library account to log in.</h1>
        <hr>
            <div class="row col-md-2" style="left: 5%;">
                <form>
                    <div class="form-group row">
                        <label for="usernameInput">Username</label>
                        <input type="text" class="form-control" id="usernameInput" placeholder="Library Card #">
                    </div>
                    <div class="form-group row">
                        <label for="passwordInput">Password</label>
                        <input type="text" class="form-control" id="passwordInput" placeholder="Password">
                    </div>
                    <div class="form-group row">
                        <button type="button" class="btn btn-secondary">Log in</button>
                    </div>
                </form>
            </div> 
    </div>
</body>

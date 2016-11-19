
<head>
    <?php include 'header.html'; ?>
    <link href="./css/SolidSidenav.css" rel="stylesheet" />	</head></head>
</head>
<title>Fees</title>

<body>
<?php include 'navbar.html'; ?>
<div id="wrapper">
    <h2 style="margin-left: 3%">Checked Out</h2>   
    <h4 style="margin-left: 3%"></h4>
    <hr>
    <div class="row col-md-6" style="left: 5%;">    
        <form>
            <div class="form-group row">    
                <h4>You currently have no books checked out.</h4>
            </div>    
            <div class="form-group row">    
                <h4>Or</h4>
            </div>
            <div class="form-group row" style="background-color: EEEEEE;">
                <div class="checked-out-item">
                    <form>
                        <div class ="form-group row">
                            <h4><b>Title 1</b></h4>
                        </div>
                        <div class ="form-group row">
                            <h4 style="display: inline; float: left;">Author</h4>                
                            <h4 class = "checked-out-checkbox" align="right"><label class="checkbox-inline"><input type="checkbox" value="">renew</label></h4>
                        </div>
                        <div class ="form-group row">
                            <h4>Due Date</h4>      
                        </div>
                    </form>
                </div>
            </div>
            <div class="form-group row" style="background-color: EEEEEE;">
                <div class="checked-out-item">
                    <form>
                        <div class ="form-group row">
                            <h4><b>Title 1</b></h4>
                        </div>
                        <div class ="form-group row">
                            <h4 style="display: inline; float: left;">Author</h4>                
                            <h4 class = "checked-out-checkbox" align="right"><label class="checkbox-inline"><input type="checkbox" value="">renew</label></h4>
                        </div>
                        <div class ="form-group row">
                            <h4>Due Date</h4>      
                        </div>
                    </form>
                </div>
            </div>
            <div class="form-group row">
                <button type="button" class="btn btn-secondary" style="float:right">Renew</button>
            </div>
        </form>
    </div>      
</div>
</body>
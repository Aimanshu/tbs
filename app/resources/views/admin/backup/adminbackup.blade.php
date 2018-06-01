
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title> Admin Panel</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/startmin.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        
    </head>
<body style="background: #fff;">


   
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
    <a class="navbar-brand" href="index.html" >Welcome Admin</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
                           

    <div class="navbar-default sidebar" role="navigation">
     <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu" style="background: #2483d4;">
            <li>
            <a href="#" style="color:#fff;"><i class="fa fa-table fa-fw"></i>Dashboard</a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#fff;">
                    <i class="fa fa-table fa-fw"></i> Add User <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user" style="width: 250px;
                  border: none;border-radius: 0px;">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Add User</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> View User</a>
                    </li>
                    
                </ul>
            </li>
        </ul>
     </div>
    </div>
    </nav>

<div id="page-wrapper">
    <div class="row">
    <div class="col-lg-12">
    <h1 class="page-header">Dashboard</h1>
    </div>
    </div>
                
<div class="row">
    <div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
    <div class="panel-heading">
    <div class="row">
    <div class="col-xs-3">
    <i class="fa fa-comments fa-5x"></i>
    </div>
    
    </div>
    </div>
    <a href="#">
    <div class="panel-footer">
    <span class="pull-left">Add User</span>
    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
    <div class="clearfix"></div>
    </div>
    </a>
    </div>
    </div>
                    
    <div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
    <div class="panel-heading">
    <div class="row">
    <div class="col-xs-3">
    <i class="fa fa-tasks fa-5x"></i>
    </div>
    
    </div>
    </div>
    <a href="#">
    <div class="panel-footer">
    <span class="pull-left">View User</span>
        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
    <div class="clearfix"></div>
    </div>
    </a>
    </div>
    </div>
                              
                    
</div>
                
</div>

</body>
</html>

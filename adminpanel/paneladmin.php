<?php 
session_start();
if(!$_SESSION["empid"])
{
  header("Location:Adminlogin.php");
  
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Payroll management system</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="paneladmin.php">Admin Panel - Payroll Management System </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i>Paystatment <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                         <li>
                            <a href="displaypaystatbyid.php" target="main"><i class="fa fa-fw fa-envelope"></i>Display Paystatment</a>
                        </li>
						 <li>
                            <a href="displaypaystatmentbydept.php" target="main"><i class="fa fa-fw fa-envelope"></i>Display Paystatment by department</a>
                        </li>
						
                     
                        
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Employee Info <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="enqempbyid.php"target="main"><i class="fa fa-fw fa-user"></i>Display by Id</a>
                        </li>
                        <li>
                            <a href="enqempbydept1.php" target="main"><i class="fa fa-fw fa-envelope"></i>Display By Deptartment</a>
                        </li>
						 <li>
                            <a href="enqempbyorg.php" target="main"><i class="fa fa-fw fa-envelope"></i>Display By organisation</a>
                        </li>
						 <li>
                            <a href="salary.php" target="main"><i class="fa fa-fw fa-envelope"></i>Generate Salary</a>
                        </li>
						<li>
                            <a href="Displaytextbox.php" target="main"><i class="fa fa-fw fa-envelope"></i>Emp Info update</a>
                        </li>
						
						
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                   
                    <li>
                        <a href="enqdept.php" target="main"><i class="fa fa-fw fa-bar-chart-o"></i>Display Dept info</a>
                    </li>
                    <li>
                        <a href="enqpayscale.php"target="main"><i class="fa fa-fw fa-table"></i>Display payscale</a>
                    </li>
                    <li>
                        <a href="enqAI.php"target="main"><i class="fa fa-fw fa-edit"></i>Display Annual increment</a>
                    </li>
                    <li>
                        <a href="enqearning.php"target="main"><i class="fa fa-fw fa-desktop"></i>Display earnings</a>
                    </li>
					 <li>
                        <a href="enqdeduction.php"target="main"><i class="fa fa-fw fa-desktop"></i>Display Deduction</a>
                    </li>
                     <li>
                        <a href="updateAI.php"target="main"><i class="fa fa-fw fa-desktop"></i>Update Annual Increment</a>
                    </li>
                 
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Master Entry <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="empinfo.php" target="main">Employee Info</a>
                            </li>
                            <li>
                                <a href="deptinfo.php" target="main">Dept Info</a>
                            </li>
							   <li>
                                <a href="payscale.php" target="main">Payscale</a>
                            </li>
							   <li>
                                <a href="earning.php" target="main">Earnings</a>
                            </li>
							   <li>
                                <a href="deduction.php" target="main">Deduction</a>
                            </li>
							   <li>
                                <a href="Annualincr.php" target="main">Annual Increment</a>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                  <iframe name="main" frameborder="3" height="600" width="100%"></iframe>  
                </div>
                
               


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

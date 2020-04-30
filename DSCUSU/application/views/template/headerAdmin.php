<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Bootstrap 3 Admin</title>
  <meta name="generator" content="Bootply" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="<?php echo base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/styles.css") ?>" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Dashboard</a>
            </div>
            
        </div>
        <!-- /container -->
    </div>
    <!-- /Header -->

    <!-- Main -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <!-- Left column -->
                <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>

                <hr>

                <ul class="nav nav-stacked">
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Settings <i class="glyphicon glyphicon-chevron-down"></i></a>
                        <ul class="nav nav-stacked collapse in" id="userMenu">
                            <li class="active"> <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> Messages <span class="badge badge-info">4</span></a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Options</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-comment"></i> Shoutbox</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-user"></i> Staff List</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-flag"></i> Transactions</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-exclamation-sign"></i> Rules</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2"> Reports <i class="glyphicon glyphicon-chevron-right"></i></a>

                        <ul class="nav nav-stacked collapse" id="menu2">
                            <li><a href="#">Information &amp; Stats</a>
                            </li>
                            <li><a href="#">Views</a>
                            </li>
                            <li><a href="#">Requests</a>
                            </li>
                            <li><a href="#">Timetable</a>
                            </li>
                            <li><a href="#">Alerts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">
                        <a href="#" data-toggle="collapse" data-target="#menu3"> Social Media <i class="glyphicon glyphicon-chevron-right"></i></a>
                        <ul class="nav nav-stacked collapse" id="menu3">
                            <li><a href=""><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                            <li><a href=""><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
                        </ul>
                    </li>
                </ul>

                <hr>

                
            </div>
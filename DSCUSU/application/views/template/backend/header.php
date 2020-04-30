<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="shortcut icon" href="<?php echo base_url("favicon_16.ico") ?>"/>
    <link rel="bookmark" href="<?php echo base_url("favicon_16.ico") ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/dist/css/site.min.css") ?>">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url("assets/dist/js/site.min.js") ?>"></script>
    <link href="<?php echo base_url("assets/css/styles.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>"> 
    <link href="<?php echo base_url('assets/summernote/summernote.css'); ?>" rel="stylesheet">
</head>
<body>
    <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
             <br>
             <img class="form-group text-center" width="40%"  src="<?php echo base_url("image/dscicon.png") ?>">


         </div>

     </div>
     
 </div>
 <div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>

            <hr>

            <ul class="nav nav-stacked">
                <li class="nav-header"> Settings</a>
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li class="active"> <a href="<?php echo base_url('index.php/page/home'); ?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                        <li><a href="<?php echo base_url('index.php/page/event'); ?>"><i class=" glyphicon glyphicon-blackboard "></i> Event</a></li>
                        <li><a href="<?php echo base_url('index.php/page/post'); ?>"><i class=" glyphicon glyphicon-file "></i> Berita</a></li>
                        

                        <?php
            // Cek role user
            if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
                ?>
                <li><a href="<?php echo base_url('index.php/page/pengguna'); ?>"><i class="glyphicon glyphicon-user"></i> Pengguna</a></li>
                
                <li><a href="<?php echo base_url('index.php/page/staff'); ?>"><i class="glyphicon glyphicon-user"></i> Staff</a></li>
                <?php
            }
            ?>
            
            <li><a href="<?php echo base_url('index.php/page/rules'); ?>"><i class="glyphicon glyphicon-exclamation-sign"></i> Rules</a></li>
            <li><a href="<?php echo base_url('index.php/auth/logout'); ?>"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
        </ul>
    </li>
    
    
</ul>

<hr>


</div>

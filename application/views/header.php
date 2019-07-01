<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="skcats">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Tugas Akhir COOYYYY</title>

        <!-- Styles -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/croppie.css')?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/plugins/icomoon/style.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/plugins/uniform/css/default.css');?>" rel="stylesheet"/>
        <link href="<?php echo base_url('assets/plugins/switchery/switchery.min.css');?>" rel="stylesheet"/>
        <link href="<?php echo base_url().'assets/css/jquery.datatables.min.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins/bootstrap-datepicker/css/datepicker3.css');?>" rel="stylesheet" type="text/css');?>"/>
      
        <!-- Theme Styles -->
        <link href="<?php echo base_url('assets/css/ecaps.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/custom.css');?>" rel="stylesheet">


        <!-- Theme Styles -->
        <link href="<?php echo base_url('assets/css/ecaps.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/custom.css');?>" rel="stylesheet">
        <style>
            .panel{
                border-color: #2b538e;}
            
        </style>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url('assets/plugins/jquery/jquery-3.1.0.min.js');?>"></script>
        <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
        <script src="<?php echo base_url('assets/plugins/uniform/js/jquery.uniform.standalone.js');?>"></script>
        <script src="<?php echo base_url('assets/plugins/switchery/switchery.min.js');?>"></script>
        <script src="<?php echo base_url('assets/plugins/datatables/js/jquery.datatables.min.js');?>"></script>
        <script src="<?php echo base_url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
        
        <script src="<?php echo base_url('assets/js/pages/table-data.js');?>"></script>
        <script src="<?php echo base_url('assets/js/croppie.js');?>"></script>
        <script src="assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="<?php echo base_url('assets/js/ecaps.min.js');?>"></script>
        <script src="assets/js/pages/form-wizard.js"></script>
    </head>
    <body>


        
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar">
                <a class="logo-box" href="index.html">
                    <span>ecaps</span>
                    <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
                    <i class="icon-close" id="sidebar-toggle-button-close"></i>
                </a>
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-menu">
                        <ul class="accordion-menu">
                            <li class="active-page">
                                <a href="index.html">
                                    <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                                </a>

                            </li>
                            <li>
                                <a href="email.html">
                                    <i class="menu-icon icon-inbox"></i><span>Email</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-flash_on"></i><span>UI Kits</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-icons.html">Icons</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-notifications.html">Notifications</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-progress.html">Progress Bars</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-tree-view.html">Tree View</a></li>
                                    <li><a href="ui-nestable.html">Nestable</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-layers"></i><span>Layouts</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="layout-blank.html">Blank Page</a></li>
                                    <li><a href="layout-boxed.html">Boxed Layout</a></li>
                                    <li><a href="layout-collapsed-sidebar.html">Collapsed Sidebar</a></li>
                                    <li><a href="layout-fixed-header.html">Fixed Header</a></li>
                                    <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                                    <li><a href="layout-fixed-sidebar-header.html">Fixed Sidebar &amp; Header</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-code"></i><span>Forms</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="form-elements.html">Elements</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-file-upload.html">File Upload</a></li>
                                    <li><a href="form-image-crop.html">Image Crop</a></li>
                                    <li><a href="form-image-zoom.html">Image Zoom</a></li>
                                    <li><a href="form-x-editable.html">X-editable</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-format_list_bulleted"></i><span>Tables</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="table-static.html">Static</a></li>
                                    <li><a href="table-responsive.html">Responsive</a></li>
                                    <li><a href="table-data.html">Data Tables</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="charts.html">
                                    <i class="menu-icon icon-show_chart"></i><span>Charts</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-my_location"></i><span>Maps</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="maps-google.html">Google</a></li>
                                    <li><a href="maps-vector.html">Vector</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-star"></i><span>Extra</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="500.html">500 Page</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="lockscreen.html">Lockscreen</a></li>
                                    <li><a href="todo.html">Todo</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                    <li><a href="timeline.html">Timeline</a></li>
                                </ul>
                            </li>
                            <li class="menu-divider"></li>
                            <li>
                                <a href="index.html">
                                    <i class="menu-icon icon-help_outline"></i><span>Documentation</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div><!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="search-form">
                        <form action="#" method="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                                </span>
                            </div>
                        </form>
                    </div> 
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <div class="logo-sm">
                                    <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                    <a class="logo-box" href="index.html"><span>ecaps</span></a>
                                </div>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </div>
                        
                            <!-- Collect the nav links, forms, and other content for toggling -->
                        
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                                    <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li>
                                    <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a></li>
                                </ul>
                                
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div><!-- /Page Header -->

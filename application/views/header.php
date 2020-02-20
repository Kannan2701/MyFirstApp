<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gutim Template">
    <meta name="keywords" content="Gutim, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gutim | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


<header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li class="<?php echo $this->uri->segment(2)=="index"?"active":" "; ?>"> <a href="<?php echo base_url();?>index.php/Welcome/index">Home</a></li>
                        <li class="<?php echo $this->uri->segment(2)=="about"?"active":" "; ?>"><a href="<?php echo base_url();?>index.php/Welcome/about">About</a></li>
                        <li class="<?php echo $this->uri->segment(2)=="Classes"?"active":" "; ?>"><a href="<?php echo base_url();?>index.php/Welcome/Classes">Classes</a></li>
                        <li class="<?php echo $this->uri->segment(2)=="Blog"?"active":" "; ?>"><a href="<?php echo base_url();?>index.php/Welcome/Blog">Blog</a></li>
                        <li class="<?php echo $this->uri->segment(2)=="Gallery"?"active":" "; ?>"><a href="<?php echo base_url();?>index.php/Welcome/Gallery">Gallery</a></li>
                        <li class="<?php echo $this->uri->segment(2)=="contact"?"active":" "; ?>"><a href="<?php echo base_url();?>index.php/Welcome/contact">Contacts</a></li>
                    </ul>
                </nav>
                <a href="#" class="primary-btn signup-btn">Sign Up Today</a>
            </div>
            <div id="mobile-menu-wrap"><div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;"><span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a><nav class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                    <ul>
                        <li><a href="./index.html" role="menuitem">Home</a></li>
                        <li><a href="./about-us.html" role="menuitem">About</a></li>
                        <li class="active"><a href="./classes.html" role="menuitem">Classes</a></li>
                        <li><a href="./blog.html" role="menuitem">Blog</a></li>
                        <li><a href="./gallery.html" role="menuitem">Gallery</a></li>
                        <li><a href="./contact.html" role="menuitem">Contacts</a></li>
                    </ul>
                </nav></div></div>
        </div>
    </header>
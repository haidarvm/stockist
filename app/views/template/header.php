<?php
use Symfony\Component\HttpFoundation\Session\Session as Session;
$session = new Session();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Aplikasi Inventory BioFarma Electrical">
    <meta name="title" content="BioFarma Inv Electrical">
    <meta name="keywords" content="Inventory , Biofarma, electrical">
    <meta name="author" content="hydant">
    <meta name="googlebot-news" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="content-language" content="In-Id" />
    <meta property="og:site_name" content="<?php echo base_url();?>" />
    <meta property="og:title" content="Dashboard" />
    <meta property="og:description" content="Aplikasi Inventory BioFarma Electrical" />
    <meta property="og:url" content="<?=base_url();?>" />
    <meta property="og:image" content="<?=base_url();?>assets/img/logo.png" />
    <meta property="og:type" content="website" />
    <link rel="shortcut icon" href="<?=base_url();?>assets/images/favicon.svg" type="image/x-icon" />
    <style>


    </style>
    <title><?php echo APP;?></title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/lineicons.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/main.css" />
    <?php function_exists('css') ? css() : ''; ?>
    <link rel="stylesheet" href="<?=base_url();?>assets/css/custom.css?v=1.4" />
</head>

<body>
    <!-- ======== sidebar-nav start =========== -->
    <?php require_once 'menu.php';?>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-6">
                        <div class="header-left d-flex align-items-center">
                            <div class="menu-toggle-btn mr-20">
                                <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                                    <i class="lni lni-chevron-left me-2"></i> Menu
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-6">
                        <div class="header-right">
                            <!-- notification start -->
                            <div class="notification-box ml-15 d-none d-md-flex">
                                <button class="dropdown-toggle" type="button" id="notification"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="lni lni-alarm"></i>
                                    <span class="quantity">0</span>
                                </button>
                                <ul class="dropdown-menu notif dropdown-menu-end" aria-labelledby="notification">
                                    
                                </ul>
                            </div>
                            <!-- notification end -->
                            <!-- profile start -->
                            <div class="profile-box ml-15">
                                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="profile-info">
                                        <div class="info">
                                            <h6><?=$session->get("user_data")["username"];?> </h6>
                                            <div class="image">
                                                <img src="<?=base_url();?>assets/images/profile/profile-image.png"
                                                    alt="" />
                                                <span class="status"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <i class="lni lni-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                                    <li>
                                        <a href="#0">
                                            <i class="lni lni-user"></i> View Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="lni lni-alarm"></i> Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                                    </li>
                                    <li>
                                        <a href="<?=URL;?>logout"> <i class="lni lni-exit"></i> Sign Out </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- profile end -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== header end ========== -->
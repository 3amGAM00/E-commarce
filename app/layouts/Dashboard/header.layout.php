<?php

use App\Process\Template;
?>
<!doctype html>
<html dir = "<?php echo  DEFULT_DIRECTION?>" lang="<?php echo DEFULT_LANGUAGE?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title><?= $title ?></title>

    <!-- Scripts -->
    <script src="<?= Template::asset('js/app.js') ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Bootstrap CSS-->
      <link rel="stylesheet" href="<?= Template::asset('admin/vendor/bootstrap/css/bootstrap.min.css')?>">
      <!-- Font Awesome CSS-->
      <link rel="stylesheet" href="<?= Template::asset('admin/vendor/font-awesome/css/font-awesome.min.css')?>">
        <link rel="stylesheet" href="<?= Template::asset('admin/vendor/lightbox/lightbox.css')?>">
      <!-- Custom Font Icons CSS-->
      <link rel="stylesheet" href="<?= Template::asset('admin/css/font.css')?>">
      <!-- Google fonts - Muli-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
      <!-- theme stylesheet-->
      <link rel="stylesheet" href="<?= Template::asset('admin/css/style.default.css')?>" id="theme-stylesheet">
      <!-- Custom stylesheet - for your changes-->
      <link rel="stylesheet" href="<?= Template::asset('admin/css/custom.css')?>">
      <!-- Favicon-->
      <link rel="shortcut icon" href="<?= Template::asset('admin/img/favicon.ico')?>">
    <!-- Styles -->
    <link href="<?= Template::asset('css/app.css') ?>" rel="stylesheet">
</head>
<body>
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.php" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">
            <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
            <div class="list-inline-item dropdown">
                <a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle">
                    <i class="icon-email"></i>
                    <span class="badge dashbg-1">2</span>
                </a>
              <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages">
                  <a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-3.jpg" alt="..." class="img-fluid">
                    <div class="status online"></div>
                  </div>
                  <div class="content">
                      <strong class="d-block">Nadia Halsey</strong>
                      <span class="d-block">lorem ipsum dolor sit amit</span>
                      <small class="date d-block">9:30am</small>
                  </div>
                  </a>
                  <a href="#" class="dropdown-item text-center message">
                      <strong>See All Messages <i class="fa fa-angle-right"></i></strong>
                  </a>
              </div>
            </div>
            <!-- Tasks-->

            <div class="list-inline-item dropdown">
                <a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="<?= Template::asset('admin/img/flags/16/ar.png')?>" alt="Arabic"><span class="d-none d-sm-inline-block">ar</span></a>
              <div aria-labelledby="languages" class="dropdown-menu">
                <a rel="nofollow" href="#" class="dropdown-item"> <img src="<?= Template::asset('admin/img/flags/16/GB.png')?>" alt="English" class="mr-2"><span>en</span></a>
                <a rel="nofollow" href="#" class="dropdown-item"> <img src="<?= Template::asset('admin/img/flags/16/ar.png')?>" alt="ar" class="mr-2"><span>ar  </span></a>
            </div>
            </div>
            <!-- Log out               -->

            <div class="list-inline-item logout">
                <a class="dropdown-item" href="{{ route('admin.logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 Logout<i class="icon-logout"></i></a>
             </a>

                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">

             </form>
            </div>
          </div>
        </div>
      </nav>
    </header>

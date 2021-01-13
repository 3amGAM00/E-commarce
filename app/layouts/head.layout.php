<?php

use App\Process\Template;
?>
<!doctype html>
<html dir= "<?php DEFULT_DIRECTION?>" lang="<?php DEFULT_LANGUAGE?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title><?php $title?></title>
    <!-- Scripts -->
    <script src="<?= Template::asset('js/app.js') ?>" defer></script>
    <script src="<?= Template::asset('assets/js/stellar.js')?>"></script>
    <script src="<?= Template::asset('css/vendors/lightbox/simpleLightbox.min.js')?>"></script>
    <script src="<?= Template::asset('css/vendors/nice-select/js/jquery.nice-select.min.js')?>"></script>
    <script src="<?= Template::asset('css/vendors/isotope/imagesloaded.pkgd.min.js')?>"></script>
    <script src="<?= Template::asset('css/vendors/isotope/isotope-min.js')?>"></script>
    <script src="<?= Template::asset('css/vendors/owl-carousel/owl.carousel.min.js')?>"></script>
    <script src="<?= Template::asset('assets/js/jquery.ajaxchimp.min.js')?>"></script>
    <script src="<?= Template::asset('css/vendors/counter-up/jquery.waypoints.min.js')?>"></script>
    <script src="<?= Template::asset('css/vendors/counter-up/jquery.counterup.js')?>"></script>

    <script src="<?= Template::asset('assets/js/theme.js')?>"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="<?= Template::asset('css/vendors/owl-carousel/owl.carousel.min.css')?>" />
    <link rel="stylesheet" href="<?= Template::asset('css/vendors/lightbox/simpleLightbox.css')?>" />
    <link rel="stylesheet" href="<?= Template::asset('css/vendors/nice-select/css/nice-select.css')?>" />
    <link rel="stylesheet" href="<?= Template::asset('css/vendors/animate-css/animate.css')?>" />
    <link rel="stylesheet" href="<?= Template::asset('css/vendors/jquery-ui/jquery-ui.css')?>" />
    <link rel="stylesheet" href="<?= Template::asset('vendors/linericon/style.css')?>" />

    <link rel="stylesheet" href="<?= Template::asset('css/app.css')?>" />
    <link rel="stylesheet" href="<?= Template::asset('css/responsive.css')?>" />


</head>
<body>
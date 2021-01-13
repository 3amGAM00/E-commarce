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

    <title><?php $title ?></title>

    <!-- Scripts -->
    <script src="<?= Template::asset('js/app.js') ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Bootstrap CSS-->
      <link rel="stylesheet" href="<?= Template::asset('admin/vendor/bootstrap/css/bootstrap.min.css')?>">
      <!-- Font Awesome CSS-->
      <link rel="stylesheet" href="<?= Template::asset('admin/vendor/font-awesome/css/font-awesome.min.css')?>">
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
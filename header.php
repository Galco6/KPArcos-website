<?php
/*
Template Name: Página de entradas
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title> <?php bloginfo('name') ?> </title>
    <meta http-equiv="Content-Type" content="text/html; ISO-8859-1">
    <META NAME="DC.Language" SCHEME="RFC1766" CONTENT="Spanish">
    <META NAME="REPLY-TO" CONTENT="clubpiraguismoarcos@gmail.com">
    <LINK REV="made" href="mailto:clubpiraguismoarcos@gmail.com">
    <META NAME="DESCRIPTION" CONTENT="Web oficial del Club de Piragüismo Arcos de la Frontera, dedicado al fomento del piragüismo y la práctica del Kayak Polo">
    <META NAME="KEYWORDS" CONTENT="piragüismo,piraguismo,kayak,kayak-polo,kayakpolo,piragüa,arcos,arcos de la frontera,club,deporte">
    <META NAME="Resource-type" CONTENT="Journal">
    <META NAME="DateCreated" CONTENT="Thu, 6 October 2016 00:00:00 GMT+1">
    <META NAME="robots" content="ALL">

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67134900-2', 'auto');
  ga('send', 'pageview');

    </script>

     <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
    <?php wp_head(); ?>
</head>
<body>
      <div class="header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">        
          <span class="title mdl-layout-title">
            <img class="logo-image" src="http://www.clubpiraguismoarcos.es/wp-content/uploads/2016/07/logo.png">
            KPArcos
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="header-spacer mdl-layout-spacer"></div>
          <!-- Navigation -->
          <div class="navigation-container">
            <nav class="navigation mdl-navigation">
             <?php wp_nav_menu(
    array(
        'container' => false,
        'item_wrap' => '<ul id="menu-top">%3$s</ul>',
        'theme_location' => 'menu'     
)); ?>
            </nav>
          </div>
          <span class="mobile-title mdl-layout-title">
            <img class="logo-image" src="http://www.clubpiraguismoarcos.es/wp-content/uploads/2016/07/logo.png">KPArcos
          </span>
        </div>
      </div>



      <div class="drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="logo-image" src="http://www.clubpiraguismoarcos.es/wp-content/uploads/2016/07/logo.png">
        </span>
        <nav class="mdl-navigation">
 <?php wp_nav_menu(
    array(
        'container' => false,
        'item_wrap' => '<ul id="menu-top">%3$s</ul>',
        'theme_location' => 'menu'     
)); ?>
        </nav>
      </div>
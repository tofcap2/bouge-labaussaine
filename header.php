<!doctype html>
<html <?php language_attributes() ;?>>
<head>
    <meta charset="<?php bloginfo('charset') ;?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<? bloginfo('pingback_url') ;?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title><?php wp_title('') ;?></title>

    <?php wp_head() ;?>
</head>
<body <?php body_class() ;?>>

    <header class="header">

        <img src="<?php echo bloginfo('template_url') ;?>/image/logo.jpg" alt="Logo" >

        <div class="header-menu">
            <nav><?php  wp_nav_menu(array('theme_location' => 'menu-principal'));?></nav>
        </div>

        <a class="fab fa-facebook-f header-menu-sociaux" href=https://www.facebook.com/Bouge-%C3%A0-La-Baussaine-185020691839799/"></a>

        <div class="toggle_btn">
            <span></span>
        </div>

    </header>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myporuch</title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css?ver=<?=time();?>">

    <?php wp_head();?>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-990ZBQRHN1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-990ZBQRHN1');
</script>
</head>
<body>

<div class="zoom-container">
        <div class="wrapper" id="up">

        <?php 
        if ( is_page_template( ['home.php']) ) { ?>
            <img class="back-logo" src="<?php echo get_template_directory_uri();?>/assets/images/m.svg" alt="m">
        <?php } else if ( is_page_template( [ 'join-team.php']) ) { ?>
            <img class="back-logo small" src="<?php echo get_template_directory_uri();?>/assets/images/m.svg" alt="m">
        <?php } else { ?>

        <?php } ?>
            <header class="header" id="header">
                <div class="container">
                    <div class="inner flex">
                        <div class="flex">
                            <a href="<?php echo get_home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo.svg" alt=""></a>
                            <?php 
                                wp_nav_menu( array(
                                    'menu_class'=>'nav flex',
                                    'theme_location'=>'header_menu'
                                ) );
                                ?>
                        </div>
                        <div class="flex">
                            <a href="https://myporuch.io/help/" class="button button-dark">Отримати допомогу</a>
                            <!-- <a class="button button-dark">Зробити донат</a> -->
                        </div>
                        <button class="open-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <div class="mobile-menu">
                        <?php 
                                wp_nav_menu( array(
                                    'menu_class'=>'nav flex',
                                    'theme_location'=>'header_menu'
                                ) );
                                ?>
                            <div class="social">
                                <a href="https://t.me/+p12XGL9izsJlZTYy"><img src="<?php echo get_template_directory_uri();?>/assets/images/telegram.svg" alt="telegram icon"></a>
                                <a href="https://www.instagram.com/myporuch/?igshid=YmMyMTA2M2Y%3D"><img src="<?php echo get_template_directory_uri();?>/assets/images/instagram.svg" alt="instagram icon"></a>
                                <!-- <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/twitter.svg" alt="twitter icon"></a> -->
                            </div>
                            <div class="flex">
                                <!-- <a class="button button-light">Зробити донат</a> -->
                                <a href="https://myporuch.io/help/" class="button button-dark">Отримати допомогу</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


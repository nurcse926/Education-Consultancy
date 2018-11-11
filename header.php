<?php
Global $dmseducation;
?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head lang="<?php language_attributes();?>">
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>DMS EDUCATION CONSULTANCY</title>



<link rel="icon" href="<?php echo esc_url(get_template_directory_uri());?>/img/edu1.png" type="/image/png" />
<link rel="shortcut icon" href="/favicon.ico" /



    <link rel="stylesheet" type="text/css" href="
    <?php echo esc_url(get_template_directory_uri());?>/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="
    <?php echo esc_url(get_template_directory_uri());?>/css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="
    <?php echo esc_url(get_template_directory_uri());?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="
    <?php echo esc_url(get_template_directory_uri());?>/css/grid.css">
    <link rel="stylesheet" type="text/css" href="
    <?php echo esc_url(get_template_directory_uri());?>/css/base.css">
    <link rel="stylesheet" type="text/css" href="
    <?php echo esc_url(get_template_directory_uri());?>/css/blocks.css">
    <link rel="stylesheet" type="text/css" href="
    <?php echo esc_url(get_template_directory_uri());?>/css/layouts.css">
    <link rel="stylesheet" type="text/css" href="
    <?php echo esc_url(get_template_directory_uri());?>/css/modules.css">
    <link rel="stylesheet" type="text/css" href="
    <?php echo esc_url(get_template_directory_uri());?>/css/widgets-styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="
    <?php echo esc_url(get_template_directory_uri());?>/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="
    <?php echo esc_url(get_template_directory_uri());?>/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="
    <?php echo esc_url(get_template_directory_uri());?>/css/primary-menu.css">
    <link rel="stylesheet" type="text/css" href="
    <?php echo esc_url(get_template_directory_uri());?>/css/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" media="all"/>

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

    <!--External fonts-->
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" type="text/css" href="responsive.css">


<?php wp_head();?>
</head>


<body <?php body_class();?>>

<!-- Header -->

<div class="top-bar top-bar-dark" style="background:#002E5B">
    <div class="container">
            <div class="top-bar-contact">
                
                <div class="contact-item">
                    <?php echo $dmseducation['phone'] ?>
                 
                </div>

                <div class="contact-item">
                     <a href="#"><?php echo $dmseducation['email'] ?></a>
                </div>

                
            </div>

            <div class="login-block">
                <img src="
    <?php echo esc_url(get_template_directory_uri());?>/img/rr.png" class="sign-in">
                <a href="#">Sign in</a>
            </div>

                        
            <div class="follow_us">
                            <span style="color:#fff">Follow us:</span>
                            <div class="socials">
                                    <a href="" class="social__item">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/svg/circle-facebook.svg" alt="facebook">
                                    </a>

                    <a href="" class="social__item">
                        <img src="
    <?php echo esc_url(get_template_directory_uri());?>/svg/twitter.svg" alt="twitter">
                    </a>


                    <a href="" class="social__item">
                        <img src="
    <?php echo esc_url(get_template_directory_uri());?>/svg/google.svg" alt="google">
                    </a>

                    <a href="" class="social__item">
                        <img src="
    <?php echo esc_url(get_template_directory_uri());?>/svg/youtube.svg" alt="youtube">
                    </a>

                </div>
            </div>
        <a href="#" class="top-bar-close" id="top-bar-close-js">
            <span></span>
            <span></span>
        </a>

    </div>
</div>

<header class="header" id="site-header">

    <div class="container">

            <div class="header-content-wrapper">

                <a href="#" id="top-bar-js" class="top-bar-link">TOPBAR</a>

                <div class="logo">
                    <a href="index.php" class="full-block-link"></a>


<img src="<?php echo $dmseducation['logo']['url']; ?>"  alt="DMS" style= "height: 80px; width: 80px; margin-top: -10px">
                    <div class="logo-text">
                        <div class="logo-title"><?php echo $dmseducation['logo_title']; ?></div>
                        <div class="logo-sub-title"><?php echo $dmseducation['logo_subtitle']; ?></div>
                    </div>
                </div>

                <nav id="primary-menu" class="primary-menu">

                    <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                        <span class="mob-menu--title">Menu</span>
                        <span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                            <svg width="1000px" height="1000px">
                                <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                <path id="pathE" d="M 300 500 L 700 500"></path>
                                <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                            </svg>
                        </span>
                    </a>

                    <!-- menu-icon-wrapper -->

<nav id="primary_nav_wrap" style="margin-top: -17px;font-size: 25px">

<?php

  wp_nav_menu (array(
'theme_location' => 'main-menu'
        
    
  ));

?>

</nav>
              
</header>
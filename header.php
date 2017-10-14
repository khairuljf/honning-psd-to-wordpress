

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
    <head>
       <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" media="all" />
      
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/simple-likes-public.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/js/simple-likes-public.js" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/responsive.css" media="all" />

        <?php wp_head(); ?>
    </head>
    <body background="<?php echo get_template_directory_uri(); ?>/img/main-bg.jpg" <?php body_class(); ?>>
        
        <!-- Start main-wrapper -->
        <div class="main-wrapper">
            <!-- Start header -->
            <header>
                <div class="container">
                    <div class="col-md-10 col-md-offset-2">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="<?php bloginfo('home'); ?>"><img src=" <?php echo get_theme_mod('logo_upload') ?>" class="img-responsive" ></a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                

                                            <?php

                                wp_nav_menu(array(
                                    'theme_location'=>'header-menu',
                                    'menu_class'=>'nav navbar-nav',/* add class in ul*/
                                    'container'=>'', /* when you no need class  id or div before ul  */
                                    'container_class'=>'', /* add div with class before ul*/
                                    'container_ud'=>'', /* add div with id before ul */
                                    'fallback_cb'=>'default_menu', /* when menu not selected it will work from default_menu functon functions.php */
                                    
                                ));
                            ?>

                                
                                
                            </div>
                            
                        </nav>
                    </div>
                    
                </div>
                
            </header>
<?php get_header();
/**
* Template Name: servecios
*/
?>
<!-- End header -->
<!-- Start slider-wrapper -->
<div class="slider-wrapper">
    <div class="slider-section">
        <div class="container-fluid left_right_0">
            <!-- Jssor Slider Begin -->
            <div class="row">
                <style>
                /* jssor slider loading skin spin css */
                .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
                }
                @keyframes jssorl-009-spin {
                from {
                transform: rotate(0deg);
                }
                to {
                transform: rotate(360deg);
                }
                }
                </style>
                <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo get_template_directory_uri() ?>/svg/loading/static-svg/spin.svg" />
                    </div>
                    <!-- Slides Container -->
                    <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
                        overflow: hidden;">
                        <div class="slider-item ">
                            <img data-u="image" src="<?php echo get_the_post_thumbnail_url(); ?>" />
                            <div class="content-sv-lf text-right">
                                <h1 class="text-uppercase"><?php the_title(); ?></h1>
                                <h4><?php echo get_theme_mod('stitle') ?>
                                </h4>
                                <p><?php echo get_theme_mod('ssubtitle') ?>
                                </p>
                                <div class="calc service-cal">
                                    <p class="" style="padding: 0 0 0 10px;" > <a href="<?php echo site_url('calculadora'); ?>" class="btn  btn-danger" >
                                    <i style="margin-right: 10px;" class="fa fa-calculator pull-left" aria-hidden="true"></i>CALCULADORA</a>
                                </p>
                                
                            </div>
                        </div>
                        <div class="content-sv-rt text-right">
                            <h4><?php echo get_theme_mod('stitle2') ?>
                            </h4>
                            <p><?php echo get_theme_mod('ssubtitle2') ?>
                            </p>
                            <div class="calc service-cal">
                                <p class="" style="padding: 0 0 0 10px;" > <a href="<?php echo site_url('formulario'); ?>" class="btn  btn-danger" >
                                <i style="margin-right: 10px;" class="fa fa-file-text pull-left" aria-hidden="true"></i>FORMULARIO</a>
                            </p>
                            
                        </div>                                        </div>
                    </div>
                    
                    
                    
                    
                </div>
                
                <!--#region Bullet Navigator Skin Begin -->
                <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
                <style>
                .jssorb031 {position:absolute;}
                .jssorb031 .i {position:absolute;cursor:pointer;}
                .jssorb031 .i .b {fill:#000;fill-opacity:0.5;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
                .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
                .jssorb031 .iav .b {fill:#fff;stroke:#000;fill-opacity:1;}
                .jssorb031 .i.idn {opacity:.3;}
                </style>
                <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:16px;height:16px;">
                        
                    </div>
                </div>
                <!--#endregion Bullet Navigator Skin End -->
                
                <!--#region Arrow Navigator Skin Begin -->
                <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
                <style>
                .jssora051 {display:block;position:absolute;cursor:pointer;}
                .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
                .jssora051:hover {opacity:.8;}
                .jssora051.jssora051dn {opacity:.5;}
                .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
                </style>
                <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    
                </div>
                <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    
                </div>
                <!--#endregion Arrow Navigator Skin End -->
                <a style="display: none" href="https://www.jssor.com">Bootstrap Carousel</a>
            </div>
            <!-- Jssor Slider End -->
        </div>
    </div>
    
</div>
</div>
<div class="" style="padding:250px 0;"></div>
<!-- End slider-wrapper -->
<!-- Start form -->
<!-- Start footer -->
<?php get_footer(); ?>
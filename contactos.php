<?php get_header();

/**
 * Template Name: contact

 */


 ?>
            <!-- End header -->
            <!-- Start header image -->
            <div class="slider-wrapper">
                <div class="slider-section">
                    <div class="container-fluid left_right_0">
                        <!-- Jssor Slider Begin -->
                        <div class="row">
                            
                            
                        <div class=" single-page" >
                                        <img data-u="image" src="<?php echo get_template_directory_uri() ?>/img/contact.jpg" />
                                        <div class="content-contact">
                                            <h1 class="text-uppercase"><?php the_title(); ?></h1>
                                            <h2><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_theme_mod('phone') ?></h2>
                                            
                                        </div>
                                        <div class="map">
                                            <iframe src="<?php echo get_theme_mod('maplink') ?>"  height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                          </div>
                                        
                          </div>
						
						
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End header image -->
        <!-- start proyectos_d section -->
        
        <!-- End proyectos_d section -->
        
        <!-- start proyectos_d form -->
        <div class="proyectos_form_section">
            <div class="container con-parent">
                    <div class="contact-width">
                        <div class="row">
                    <div class="col-md-12 cont-form-bg">
                        <div class="row">
                            <div class="proyectos-form-area">
                                <h3><?php echo get_theme_mod('ctitle') ?></h3>
                                 <h4><?php echo get_theme_mod('csubtitle') ?></h4>
                                
                                <?php echo do_shortcode( '[contact-form-7 id="58" title="honing"]' ); ?>


                            </div>
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end proyectos_d form -->
        
        <!-- Start footer -->
        <?php get_footer(); ?>
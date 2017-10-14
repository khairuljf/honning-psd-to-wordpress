
		
		<?php get_header();

/**
 * Template Name: product details


 */


 ?>
<!-- End header -->



<?php

$pid= $_GET['id'];  

$args = array(
  'p'         => $pid, // ID of a page, post, or custom type
  'post_type' => 'aparment',
);

$product = new WP_Query($args);

 ?>

        <!-- start proyectos_d section -->
        <?php while($product->have_posts()): $product->the_post();

             $prefix = 'clean_';
            $logo = get_post_meta(get_the_ID(), $prefix . 'company_logo', true);
            $apartment = get_post_meta(get_the_ID(), $prefix . 'apartments', true);

             $caracters = get_the_terms(get_the_ID(), 'Características');
             $Terminaciones = get_the_terms(get_the_ID(), 'Terminaciones');
             $features = get_the_terms(get_the_ID(), 'features');



             ?>
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
                            <?php if(has_post_thumbnail()){ ?>

                            <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">
                                <!-- Loading Screen -->
                                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo get_template_directory_uri() ?>/svg/loading/static-svg/spin.svg" />
                                </div>
                                <!-- Slides Container -->

                                
                                <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
                                    overflow: hidden;">
                                    
                                    
                                    <div class="slider-item" >

                                        <img data-u="image" src="<?php echo get_the_post_thumbnail_url() ?>" />
                                        <div class="content-logo">
                                            <img src="<?php echo $logo; ?>" class="img-responsive">
                                        </div>

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
                                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                            
                                        </svg>
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
                                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                                </svg>
                            </div>
                            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                                
                            </div>
                            <!--#endregion Arrow Navigator Skin End -->
                            <a style="display: none" href="https://www.jssor.com">Bootstrap Carousel</a>
                        </div>

                             <?php   } ?>
                        <!-- Jssor Slider End -->
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End header image -->
        <!-- start proyectos_d section -->
        <div class="proyectos_d-section">
            <div class="container">
                <div class="row">
                   <?php the_content(); ?>
                </div>
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="category">
                            <h2>Características:</h2>
                             <?php
                              foreach ( $caracters as $caracter) {
                                    echo '<p> '.$caracter->name.'</p> ';


                                } ?> 
                      


                        </div>
                        <div class="testimonials">
                            <h2>Terminaciones:</h2>
                             <?php
                                  foreach ($Terminaciones as $Terminacione) {
                                        echo '<p> '.$Terminacione->name.'</p> ';


                                    } ?> 
                        </div>
                    </div>
                    
                    
                    <div class="apartment">
                        <div class="col-md-8">
                            <div class="col-md-4">
                                <h2>Apartamentos:</h2>
                                <ul>
                                

<?php
$prefix = 'clean_';
$entries = get_post_meta( get_the_ID(), $prefix.'my_group', true );

foreach ( (array) $entries as $key => $entry ) {

    $img = $btn = $link = '';

    if ( isset( $entry['aptbtn'] ) ) {
        $btn = esc_html( $entry['aptbtn'] );
    }

     if ( isset( $entry['link'] ) ) {
        $link = ( $entry['link'] );
        
    }



    
    $img = isset( $entry['aimg'] ) ? wpautop( $entry['aimg'] ) : '';



if(!empty($btn)){

    echo '<li>';  ?>

          <a href="<?php echo $link; ?>" class="btn active ap-btn"><?php echo $btn;  ?></a>
        <?php 
          echo'</li>';
        

}






}


 ?>

                                  
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <!-- <div class="aparment-thumnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/apartment.jpg" class="img-responsive">
                                </div> -->


                                <div id="slider">
                             
                                <button class="control_next">>></button>
                                <button class="control_prev"><<</button>

                                  <ul>



<?php
$prefix = 'clean_';
$entries = get_post_meta( get_the_ID(), $prefix.'my_group', true );

foreach ( (array) $entries as $key => $entry ) {

    $img = $btn = $link = '';

    if ( isset( $entry['aptbtn'] ) ) {
        $btn = esc_html( $entry['aptbtn'] );
    }


    if ( isset( $entry['aimg'] ) ) {
                                    $img = ( $entry['aimg'] );
                                    
                                }
   


echo '<li>';  ?>

          <img src="<?php echo $img  ?>" class="img-responsive">
        <?php 
          echo'</li>';
        




}


 ?>



                                    
                                    
                                  </ul>  

                                </div>

<div class="slider_option text-center">
  <input type="checkbox" id="checkbox">
  <label for="checkbox">Autoplay Slider</label>
</div> 



                                <div class="aparment-features">
                                    <ol>

                                    <?php
                                        $serial= 1;
                              foreach ($features as $feature) {
                                    echo '<li><span>'.$serial.'.</span> '.$feature->name.'</li>';
                                             $serial++;
                                        }

                                    ?>

                                    </ul>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- End proyectos_d section -->
        
        <!-- start proyectos_d form -->
        <div class="proyectos_form_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 pro-form-bg">
                        <div class="row">
                            <div class="proyectos-form-area">
                                <h3>Consulta sobre este proyecto</h3>
                                
                                  <?php echo do_shortcode( '[contact-form-7 id="58" title="honing"]') ?>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile ?>
        <!-- end proyectos_d form -->
        
        <!-- Start footer -->
        <?php get_footer(); ?>
		
		
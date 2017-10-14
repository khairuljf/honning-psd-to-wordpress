
		
		
		
		<?php get_header();


        <?php while(have_posts()): the_post();

             $prefix = 'clean_';
            $logo = get_post_meta(get_the_ID(), $prefix . 'company_logo', true);
            $apartment = get_post_meta(get_the_ID(), $prefix . 'apartments', true);
            $company_name = get_post_meta(get_the_ID(), $prefix . 'company_name', true);

             $caracters = get_the_terms(get_the_ID(), 'Características');
             $Terminaciones = get_the_terms(get_the_ID(), 'Terminaciones');



             ?>
        <div class="proyectos_d-section">
            <div class="container">
                <div class="row">
                    <h1><?php echo $company_name ?></h1>
                </div>
                <div class="row">
                    
                    <div class="col-md-4">
                    <p class="text-justify"> <?php echo get_the_content(); ?> </p>
                        <div class="category">
                            <h2>Características:</h2>
                          <?php
                              if(!empty($caracters)){
                                foreach ($caracters as $caracter) {
                                    echo '<p> '.$caracter->name.'</p> ';

                              }

                                }

                                else{
                                    echo "Not Found";
                                 
                                }
                                ?> 
                        </div>
                        <div class="testimonials">
                            <h2>Terminaciones:</h2>
                            <?php
                              if(!empty($Terminaciones)){

                                foreach ($Terminaciones as $Terminacione) {
                                    echo '<p> '.$Terminacione->name.'</p> ';

                              }
                            
                                } 
                                else{
                                echo "Not Found";
                              }

                              ?> 
                        </div>

                        <div class="calc procal">
                                    <p class="" style="padding: 0 0 0 10px;" > <a href="#" class="btn  btn-danger" >
                                    <i style="margin-right: 10px;" class="fa fa-calculator pull-left" aria-hidden="true"></i>CALCULADORA <br> DE PRESTAMO</a>
                                </p>
                                
                            </div>
                    </div>
                    
                    
                    <div class="apartment">
                        <div class="col-md-8">

                            <div class="product-thumb">
                                <img src="http://localhost/honing/wp-content/uploads/2017/09/products.png" class="img-responsive">
                            </div>


                            <div class="likes pull-right">
                            <a href=""><i class="fa fa-2x fa-share-alt" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-2x fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                            
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>

         <?php endwhile ?>


        <!-- End proyectos_d section -->
        
        <!-- start proyectos_d form -->
      
        <div class="proyectos_form_section">
            <div class="container con-parent">
                    <div class="contact-width">
                        <div class="row">
                    <div class="col-md-12 cont-form-bg">
                        <div class="row">
                            <div class="proyectos-form-area">
                               <h3 class="col-md-offset-1">Consulta sobre este proyecto</h3>
                                
                                <?php echo do_shortcode( '[contact-form-7 id="61" title="honing-product-details"]' ); ?>


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
<?php 
/*
 * template-ajax-results.php
 * This file should be created in the root of your theme directory
 */


if ( have_posts() ) :             
   while ( have_posts() ) : the_post(); 
   $post_type = get_post_type_object($post->post_type);



$prefix = 'clean_';
                $company_name = get_post_meta(get_the_ID(), $prefix . 'company_name', true);
                $proudct_img = get_post_meta(get_the_ID(), $prefix . 'product_image', true);
                $price = get_post_meta(get_the_ID(), $prefix . 'price1', true);

                $bedroom = get_post_meta(get_the_ID(), $prefix . 'bedroom', true);
                $Bathrooms = get_post_meta(get_the_ID(), $prefix . 'bathroom', true);
                $Business = get_post_meta(get_the_ID(), $prefix . 'business', true);
                $Condition = get_post_meta(get_the_ID(), $prefix . 'ss', true);
                $Apartments = get_post_meta(get_the_ID(), $prefix . 'aparntmet_size', true);


             ?>

                                        <div class="col-md-3">
                                            <div class="single-product">
                                                <h5><?php echo $company_name ?></h5>
                                            <div class="thumbnail">
                                               <a href="<?php the_permalink(); ?>"> <img src="<?php echo $proudct_img ?>" style="width:212px; height: 167px" ></a>
                                                <div class="caption">
                                                    <h3 class="text-center">US$ <?php echo $price ?></h3>
                                                    <p>
                                                    <ul>

                                                        <li>Habitaciones: <b><?php echo $bedroom.'+' ?></b></li> 
                                                        <li>Baños: <b><?php echo $Bathrooms.'+' ?></b></li> 
                                                        <li>Parqueos: <b><?php echo $Business ?></b></li>
                                                        <li>Condición: <b><?php echo $Condition ?></b></li>
                                                        <li>Construcción: <b><?php echo $Apartments ?></b></li>
     
                                                        
                                                    </ul>
                                                    </p>
                                                    <p class="text-center">
                                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary" role="button">caracteristicas</a> 
                                                    </p>

                                                </div>
                                            </div>
                                            </div>
                                        </div> 
                                        <?php



   endwhile; 

else :
   echo '<p>Sorry, no results matched your search.</p>';
endif; 
wp_reset_query();


?>




                      


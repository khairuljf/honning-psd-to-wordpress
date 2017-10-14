<?php 
/*
 * template-ajax-results.php
 * This file should be created in the root of your theme directory
 */


if ( have_posts() ) :             
   while ( have_posts() ) : the_post(); 
   $post_type = get_post_type_object($post->post_type);



                $prefix = 'clean_';
                    $logo = get_post_meta(get_the_ID(), $prefix . 'company_logo', true);
                    ?>
                    <div class="col-md-3 col-xs-4">
                        <a href="<?php echo site_url('product-details/') ?>?id=<?php echo $post->ID; ?>">
                            <img src="<?php echo $logo ?>" class="img-responsive">
                        </a>
                    </div>
<?php

   endwhile; 

else :
   echo '<p>Sorry, no results matched your search.</p>';
endif; 
wp_reset_query();


?>




                      


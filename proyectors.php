<?php get_header();

/**
 * Template Name: products

 */


 ?>
 <?php $my_search = new WP_Advanced_Search('products-form'); ?>
<!-- End header -->
            <!-- Start products -->
            <div class="products-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="product-filter">
                            <div class="col-md-2 col-md-offset-1" style="background: gray; padding:15px 10px; margin-top: 2.8%;">

                            <?php $my_search->the_form(); ?>
                                <div class="middle-content"><p>a</p></div>
                                
                            </div>
                        </div>
                        
                        <div class="products-list">
                            <div class="col-md-9">
                                <div class="">
                                    <div class="row">

                <?php $products= new WP_Query(array(
                'post_type'=>'aparment',
            )) ?>


                                <div id="wpas-results"></div>
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <!-- End products -->
            <!-- Start mission -->
            
            <!-- End mission -->
            
            <!-- Start footer -->
           <!-- Start footer -->
<?php get_footer(); ?>
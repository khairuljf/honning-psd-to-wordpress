<?php

function product($atts) {
    extract(shortcode_atts(array(
        'count' => '',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'aparment', 'orderby' => 'menu_order', 'order' => 'ASC')
    );
    ?>



    <?php
    $list = ' <div class="products-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="product-filter">
                            <div class="col-md-2 col-md-offset-1">
                                <form style="background:gray; padding: 10px;" >
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button
                                    
                                </form>
                                
                            </div>
                        </div>
                        
                        <div class="products-list">
                            <div class="col-md-9">
                                <div class="">
                                    <div class="row">';
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $subtitle = get_post_meta(get_the_ID(), $prefix . 'news-subtitle', true);



        $list .= '<div class="col-md-3">
                                            <div class="single-product">
                                                <h5>Residencial 1909</h5>
                                            <div class="thumbnail">
                                                <img src="img/product.jpg" alt="...">
                                                <div class="caption">
                                                    <h3 class="text-center">US$ 75,000</h3>
                                                    <p>
                                                    <ul>
                                                        <li>Habitaciones: <b>3</b></li> 
                                                        <li>Baños: <b>2</b></li> 
                                                        <li>Parqueos: <b>3</b></li>
                                                        <li>Condición: <b>nueva</b></li>
                                                        <li>Construcción: <b>330 mts2</b></li>
     
                                                        
                                                    </ul>
                                                    </p>
                                                    <p class="text-center">
                                                    <a href="#" class="btn btn-primary" role="button">caracteristicas</a> 
                                                    </p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>';

    endwhile;
    $list .= ' </div>
                    </div>
                                
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>';
    wp_reset_query();
    return $list;
}

add_shortcode('products', 'product');

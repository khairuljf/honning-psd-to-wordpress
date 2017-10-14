<?php 

add_theme_support( 'title-tag' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );



/* menu register */



register_nav_menus(array(
    'header-menu' => 'Header Menu',
));

/* default menu when menu not register  */
function default_menu() {
    echo '<ul class="nav navbar-nav navbar-right">';
    if (is_user_logged_in()) {
        echo '<li><a href="' . home_url() . '/wp-admin/nav-menus.php">Create a menu</a></li>';
    } else {
        echo '<li><a href="' . home_url() . '">Home</a></li>';
    }
    echo '</ul>';
}


/* customizer */


function mycustomize($customize) {
    $customize->add_section('heading-section', array(
        'title' => 'Header Option',
        'priority' => '10',
    ));

   
    $customize->add_setting('logo_upload', array(
        'default' => get_template_directory_uri(). '/img/logo.png',
        'transport' => 'refresh',
    ));
    $customize->add_control(
            new WP_Customize_Image_Control($customize, 'logo_upload', array(
        'section' => 'heading-section',
        'label' => 'Upload Logo',
        'settings' => 'logo_upload',
            ))
    );



    $customize->add_section('contact-section', array(
        'title' => 'Contact Page Option',
        'priority' => '11',
    ));

 $customize->add_setting('ctitle', array(
        'default' => 'Av. J.F. Kennedy, Plaza Hache, 2do Nivel, Local 224 B,',
        'transport' => 'refresh',
    ));
    $customize->add_control('ctitle', array(
        'section' => 'contact-section',
        'label' => 'Form title',
        'type' => 'text',
    ));
    $customize->add_setting('csubtitle', array(
        'default' => 'Santo Domingo, República Dominicana.',
        'transport' => 'refresh',
    ));
    $customize->add_control('csubtitle', array(
        'section' => 'contact-section',
        'label' => 'Form Sub-title',
        'type' => 'text',
    ));

      $customize->add_setting('maplink', array(
        'default' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.0427766388825!2d-69.92629418573263!3d18.481721475186283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89c6c353d249%3A0xcfd9b54208da9256!2sHoning+Inmobiliaria!5e0!3m2!1sen!2s!4v1506939079716',
        'transport' => 'refresh',
    ));
    $customize->add_control('maplink', array(
        'section' => 'contact-section',
        'label' => 'Iframe link without height widht',
        'type' => 'text',
    ));









    $customize->add_section('servicios-page', array(
        'title' => 'Servicios Page  Option',
        'priority' => '15',
    ));

 $customize->add_setting('stitle', array(
        'default' => 'Necesitas ayuda para calcular la cuota del financiamiento de tu nueva casa.',
        'transport' => 'refresh',
    ));
    $customize->add_control('stitle', array(
        'section' => 'servicios-page',
        'label' => 'Left side title',
        'type' => 'text',
    ));
    $customize->add_setting('ssubtitle', array(
        'default' => 'Necesitas ayuda para calcular la cuota ',
        'transport' => 'refresh',
    ));
    $customize->add_control('ssubtitle', array(
        'section' => 'servicios-page',
        'label' => 'Left side Sub-title',
        'type' => 'text',
    ));



$customize->add_setting('stitle2', array(
        'default' => 'Necesitas ayuda para calcular la cuota del financiamiento de tu nueva casa.',
        'transport' => 'refresh',
    ));
    $customize->add_control('stitle2', array(
        'section' => 'servicios-page',
        'label' => 'right side title',
        'type' => 'text',
    ));
    $customize->add_setting('ssubtitle2', array(
        'default' => 'Necesitas ayuda para calcular la cuota ',
        'transport' => 'refresh',
    ));
    $customize->add_control('ssubtitle2', array(
        'section' => 'servicios-page',
        'label' => 'right side Sub-title',
        'type' => 'text',
    ));




    
    $customize->add_section('footer-section', array(
        'title' => 'Footer Option',
        'priority' => '120',
    ));




    $customize->add_setting('phone', array(
        'default' => ' 809.622.3066',
        'transport' => 'refresh',
    ));
    $customize->add_control('phone', array(
        'section' => 'footer-section',
        'label' => 'First Contact Number',
        'type' => 'text',
    ));


    $customize->add_setting('phone2', array(
        'default' => '829.547.8591',
        'transport' => 'refresh',
    ));
    $customize->add_control('phone2', array(
        'section' => 'footer-section',
        'label' => 'Second Contact Number',
        'type' => 'text',
    ));

    $customize->add_setting('mail', array(
        'default' => 'contactos@honing.com.do',
        'transport' => 'refresh',
    ));
    $customize->add_control('mail', array(
        'section' => 'footer-section',
        'label' => 'Contact Mail',
        'type' => 'text',
    ));

  
    $customize->add_setting('fb', array(
        'default' => 'https://www.facebook.com/InmobiliariaHoning/',
        'transport' => 'refresh',
    ));
    $customize->add_control('fb', array(
        'section' => 'footer-section',
        'label' => 'Facebook Profile link',
        'type' => 'text',
    ));
    $customize->add_setting('ig', array(
        'default' => 'https://www.instagram.com/inmobiliariahoning/',
        'transport' => 'refresh',
    ));
    $customize->add_control('ig', array(
        'section' => 'footer-section',
        'label' => 'Instagram Profile link',
        'type' => 'text',
    ));


 $customize->add_setting('addr', array(
        'default' => 'Av. J.F. Kennedy, Plaza Hache, 2do Nivel, Local 224 B,',
        'transport' => 'refresh',
    ));
    $customize->add_control('addr', array(
        'section' => 'footer-section',
        'label' => 'Address ',
        'type' => 'text',
    ));

     $customize->add_setting('location', array(
        'default' => 'Santo Domingo, República Dominicana.',
        'transport' => 'refresh',
    ));
    $customize->add_control('location', array(
        'section' => 'footer-section',
        'label' => 'Location',
        'type' => 'text',
    ));





    $customize->add_setting('copyright', array(
        'default' => 'Copyright © 2017 Honing Inmobiliaria, S.R.L. Todos los derechos reservados.',
        'transport' => 'refresh',
    ));
    $customize->add_control('copyright', array(
        'section' => 'footer-section',
        'label' => 'Copyright Text',
        'type' => 'text',
    ));
}
add_action('customize_register', 'mycustomize');



/* Include CMB2 meta box */
include 'metabox/init.php';
include 'metabox/functions.php';

// inlcuding shortcode

include 'inc/shortcode.php';

include 'post-like.php';


// inlcuding wp-advanced-search

require_once('wp-advanced-search/wpas.php');






function my_search_form() {

$prefix = 'clean_';

    $args = array();


    
    $args['wp_query'] = array( 'post_type' => array('aparment'), 
                               'orderby' => 'title', 
                               'order' => 'ASC'

                                );

                   
    // Here is where we specify the page where results will be shown

    $args['form'] = array( 'auto_submit' => true );

    $args['form']['ajax'] = array( 'enabled' => true,
                                   'show_default_results' => true,
                                   'results_template' => 'template-ajax-results-home.php', // This file must exist in your theme root
                                   'button_text' => 'Load More Results');

$args['fields'][] = array('type' => 'html',
                          'value' => '<h4 style="color:gray">Moneda:<h4>');


    $args['fields'][] = array( 'type' => 'order', 
                               'format' => 'radio', 
                               'values' => array('US' => 'US', 'RD' => 'RD') ,
                                'class'=> array('price-type','col-md-2'),
                               );



    $args['fields'][] = array( 'type' => 'meta_key', 
                               'format' => 'text', 
                                'label' => 'Habitaciones:',
                               'meta_key'=>$prefix . 'bedroom',
                                'class'=> array('hbedroom','hbedroom'),
                               );

    $args['fields'][] = array( 'type' => 'meta_key', 
                               'format' => 'text', 
                                'label' => 'Baños:',
                               'meta_key'=>$prefix . 'bathroom',
                                'class'=> array('hbedroom'),
                               );

    $args['fields'][] = array( 'type' => 'meta_key', 
                               'format' => 'text', 
                                'label' => 'Parqueos:',                             
                               'meta_key'=>$prefix . 'business',
                                'class'=> array('hbedroom'),
                               );





     $args['fields'][] = array('type'  => 'meta_key', 
                            'meta_key'=>$prefix . 'price1',
                            'compare' => 'BETWEEN',
                            'data_type' => 'NUMERIC',
                            'inputs' => array(
                            array(
                                'format' => 'select',
                                'values' =>array(

                                     '5000'=>'Precio desde ',
                                     '50000'=>'5,00,000 ',
                                    '1000000'=>'10,00,000',
                                    '2000000'=>'20,00,000',
                                    '3000000'=>'30,00,000',
                                    '4000000'=>'40,00,000',
                                    '5000000'=>'50,00,000',
                                    '7000000'=>'70,00,000',
                                    '10000000'=>'1,00,00,000',
                                    '12000000'=>'1,20,00,000',
                                    '15000000'=>'1,50,00,000',
                                    '20000000'=>'2,00,00,000',
                                    '25000000'=>'2,50,00,000',
                                    '30000000'=>'3,00,00,000',
                                    '45000000'=>'4,50,00,000',
              
                                ),
                                'default'=>'5000',
                                'class'=> array('adsearch'),
                            ),
                            array(
                                'format' => 'select',
                                'values' =>array(
                                    '1000000'=>'10,00,000',
                                    '2000000'=>'20,00,000',
                                    '3000000'=>'30,00,000',
                                    '4000000'=>'40,00,000',
                                    '5000000'=>'50,00,000',
                                    '7000000'=>'70,00,000',
                                    '10000000'=>'1,00,00,000',
                                    '12000000'=>'1,20,00,000',
                                    '15000000'=>'1,50,00,000',
                                    '20000000'=>'2,00,00,000',
                                    '25000000'=>'2,50,00,000',
                                    '30000000'=>'3,00,00,000',
                                    '45000000'=>'4,50,00,000',
                                     '50000000'=>'Hasta',
              
                                ),
                               'default'=>'50000000',
                               'class'=> array('adsearch'),
                            ),               
            ));




    register_wpas_form('my-form', $args);    

}
add_action('init', 'my_search_form');





function product_form() {

$prefix = 'clean_';

    $args = array();


    
    $args['wp_query'] = array( 'post_type' => array('aparment'), 
                               'orderby' => 'title', 
                               'order' => 'ASC' );

                   
    // Here is where we specify the page where results will be shown

    $args['form'] = array( 'auto_submit' => true );

    $args['form']['ajax'] = array( 'enabled' => true,
                                   'show_default_results' => true,
                                   'results_template' => 'template-ajax-results.php', // This file must exist in your theme root
                                   'button_text' => 'Load More Results');





 



     $args['fields'][] = array('type'  => 'meta_key', 
                            'meta_key'=>$prefix . 'price1',
                            'compare' => 'BETWEEN',
                            'data_type' => 'NUMERIC',
                            'label'=>'Precio',
                            'inputs' => array(
                            array(
                                'format' => 'select',
                                'values' =>array(
                                    '5000'=>'Precio desde ',
                                    '50000'=>'5,00,00 ',
                                    '1000000'=>'10,00,000',
                                    '2000000'=>'20,00,000',
                                    '3000000'=>'30,00,000',
                                    '4000000'=>'40,00,000',
                                    '5000000'=>'50,00,000',
                                    '7000000'=>'70,00,000',
                                    '10000000'=>'1,00,00,000',
                                    '12000000'=>'1,20,00,000',
                                    '15000000'=>'1,50,00,000',
                                    '20000000'=>'2,00,00,000',
                                    '25000000'=>'2,50,00,000',
                                    '30000000'=>'3,00,00,000',
                                    '45000000'=>'4,50,00,000',
              
                                ),
                                'default'=>'5000',
                                'class'=> array('adsearch','form-control'),
                            ),
                            array(
                                'format' => 'select',
                                'values' =>array(
                                    
                                    '1000000'=>'10,00,000',
                                    '2000000'=>'20,00,000',
                                    '3000000'=>'30,00,000',
                                    '4000000'=>'40,00,000',
                                    '5000000'=>'50,00,000',
                                    '7000000'=>'70,00,000',
                                    '10000000'=>'1,00,00,000',
                                    '12000000'=>'1,20,00,000',
                                    '15000000'=>'1,50,00,000',
                                    '20000000'=>'2,00,00,000',
                                    '25000000'=>'2,50,00,000',
                                    '30000000'=>'3,00,00,000',
                                    '45000000'=>'4,50,00,000',
									 '50000000'=>'Hasta',
              
                                ),
                               'default'=>'50000000',
                               'class'=> array('adsearch','form-control'),
                            ),

                            
            ));


   




    $args['fields'][] = array( 'type' => 'meta_key', 
                               'format' => 'text', 
                               'label' => 'Habitaciones:', 
                               'meta_key'=>$prefix . 'bedroom',
                                 'class'=> array('form-control'),
                               );

    $args['fields'][] = array( 'type' => 'meta_key', 
                               'format' => 'text', 
                               'label' => 'Baños:', 
                               'meta_key'=>$prefix . 'bathroom',
                                'class'=> array('form-control'),
                               );

    $args['fields'][] = array( 'type' => 'meta_key', 
                               'format' => 'text', 
                               'label' => 'Parqueos:', 
                               'meta_key'=>$prefix . 'business',
                                 'class'=> array('form-control'),
                               );





    register_wpas_form('products-form', $args);    

}
add_action('init', 'product_form');





/*Custom Post register*/



 register_post_type('aparment', array(
        'labels' => array(
            'name' => 'aparment',
            'all_items'=>'All Aparrment'
        ),
        'public' => true,
        'supports' => array('thumbnail', 'title', 'editor'),
        'menu_icon'=>'https://cdn3.iconfinder.com/data/icons/blue-flat-concepts-2/128/35-20.png',
            )
    );
    register_taxonomy( 'Características', 'aparment', array(
    'labels'=>array(
        'name'=>'Características',
        'add_new_item'=>'Add New Características',
    ),
    'public'=>true,
    'hierarchical'=>true,
) );
    register_taxonomy( 'Terminaciones', 'aparment', array(
    'labels'=>array(
        'name'=>'Terminaciones',
        'add_new_item'=>'Add New Terminaciones',
    ),
    'public'=>true,
    'hierarchical'=>true,
) );register_taxonomy( 'features', 'aparment', array(
    'labels'=>array(
        'name'=>'Aparment Features',
        'add_new_item'=>'Add New Features',
    ),
    'public'=>true,
    'hierarchical'=>true,
) );



 register_post_type('nosotros', array(
        'labels' => array(
            'name' => 'Nosotros',
            'all_items'=>'All Post'
        ),
        'public' => true,
        'supports' => array('title', 'editor'),
        'menu_icon'=>'dashicons-visibility',
            )
    );

 register_post_type('slider', array(
        'labels' => array(
            'name' => 'Sliders Option',
            'all_items'=>'All Slider'
        ),
        'public' => true,
        'supports' => array('title', 'editor','thumbnail'),
        'menu_icon'=>'dashicons-visibility',
            )
    );







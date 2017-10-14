
<?php get_header(); ?>


<?php
while (have_posts()): the_post();

    $prefix = 'clean_';
    $logo = get_post_meta(get_the_ID(), $prefix . 'company_logo', true);
    $apartment = get_post_meta(get_the_ID(), $prefix . 'apartments', true);
    $company_name = get_post_meta(get_the_ID(), $prefix . 'company_name', true);
    $product_thumb = get_post_meta(get_the_ID(), $prefix . 'product_image', true);
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
    if (!empty($caracters)) {
        foreach ($caracters as $caracter) {
            echo '<p> ' . $caracter->name . '</p> ';
        }
    } else {
        echo "Not Found";
    }
    ?> 
                    </div>
                    <div class="testimonials">
                        <h2>Terminaciones:</h2>
                        <?php
                        if (!empty($Terminaciones)) {

                            foreach ($Terminaciones as $Terminacione) {
                                echo '<p> ' . $Terminacione->name . '</p> ';
                            }
                        } else {
                            echo "Not Found";
                        }
                        ?> 
                    </div>

                    <div class="calc procal">
                        <p class="" style="padding: 0 0 0 10px;" > <a href="#" class="btn  btn-danger" >
                                <i style="margin-right: 10px;" class="fa fa-calculator pull-left" aria-hidden="true"></i>CALCULADORA <br> DE PRESTAMO</a>
                        </p>
                        <P>


                        <?php echo get_permalink() ?>
                        </P>

                    </div>
                </div>


                <div class="apartment">
                    <div class="col-md-8">

                        <div class="product-thumb">
                            <img src="<?php echo $product_thumb; ?>" class="img-responsive">
                        </div>


                        <div class="likes pull-right">

                            <div class="addtoany_share_save_container addtoany_content_bottom">

                                <?php
                                echo get_simple_likes_button(get_the_ID());
                                ?>

                                <div class="a2a_kit a2a_kit_size_32 addtoany_list" data-a2a-url="<?php echo get_permalink(); ?>" data-a2a-title="Residencial 1909" style="line-height: 32px;">
                                    <a class="a2a_button_facebook" href="http://www.addtoany.com/add_to/facebook?linkurl=http%3A%2F%2Flocalhost%2Fhoning%2Faparment%2Fresidencial-1909-2%2F&amp;linkname=Residencial%201909&amp;linknote=" title="Facebook" rel="nofollow noopener" target="_blank">
                                        <span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: transparent;">
                                            <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path fill="#1e1e1e" d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z"></path>
                                            </svg>
                                        </span>
                                        <span class="a2a_label">Facebook</span>
                                    </a>
                                    <a class="a2a_button_twitter" href="http://www.addtoany.com/add_to/twitter?linkurl=http%3A%2F%2Flocalhost%2Fhoning%2Faparment%2Fresidencial-1909-2%2F&amp;linkname=Residencial%201909&amp;linknote=" title="Twitter" rel="nofollow noopener" target="_blank">
                                        <span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: transparent;">
                                            <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path fill="#1e1e1e" d="M28 8.557a9.913 9.913 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.738 9.738 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.893 9.893 0 0 1-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"></path></svg></span>
                                        <span class="a2a_label">Twitter</span>
                                    </a>
                                    <a class="a2a_button_google_plus" href="/#google_plus" title="Google+" rel="nofollow noopener" target="_blank">
                                            <span class="a2a_svg a2a_s__default a2a_s_google_plus" style="background-color: transparent;">
                                                        <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M27 15h-2v-2h-2v2h-2v2h2v2h2v-2h2m-15-2v2.4h3.97c-.16 1.03-1.2 3.02-3.97 3.02-2.39 0-4.34-1.98-4.34-4.42s1.95-4.42 4.34-4.42c1.36 0 2.27.58 2.79 1.08l1.9-1.83C15.47 9.69 13.89 9 12 9c-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.72-2.84 6.72-6.84 0-.46-.05-.81-.11-1.16H12z" fill="#1e1e1e"></path></svg></span>
                                            <span class="a2a_label">Google+</span>
                                    </a>
                                    <a class="a2a_button_pinterest" href="/#pinterest" title="Pinterest" rel="nofollow noopener" target="_blank">
                                        <span class="a2a_svg a2a_s__default a2a_s_pinterest" style="background-color: transparent;"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                            <path fill="#1e1e1e" d="M16.539 4.5c-6.277 0-9.442 4.5-9.442 8.253 0 2.272.86 4.293 2.705 5.046.303.125.574.005.662-.33.061-.231.205-.816.27-1.06.088-.331.053-.447-.191-.736-.532-.627-.873-1.439-.873-2.591 0-3.338 2.498-6.327 6.505-6.327 3.548 0 5.497 2.168 5.497 5.062 0 3.81-1.686 7.025-4.188 7.025-1.382 0-2.416-1.142-2.085-2.545.397-1.674 1.166-3.48 1.166-4.689 0-1.081-.581-1.983-1.782-1.983-1.413 0-2.548 1.462-2.548 3.419 0 1.247.421 2.091.421 2.091l-1.699 7.199c-.505 2.137-.076 4.755-.039 5.019.021.158.223.196.314.077.13-.17 1.813-2.247 2.384-4.324.162-.587.929-3.631.929-3.631.46.876 1.801 1.646 3.227 1.646 4.247 0 7.128-3.871 7.128-9.053.003-3.918-3.317-7.568-8.361-7.568z"></path></svg>
                                        </span><span class="a2a_label">Pinterest</span>
                                    </a>
                                </div>
                            </div>



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

<?php echo do_shortcode('[contact-form-7 id="61" title="honing-product-details"]'); ?>


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
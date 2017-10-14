<?php get_header();
/**
* Template Name: calculadora
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
                                    <div class="slider-item">
                                        <img data-u="image" src="<?php echo get_the_post_thumbnail_url(); ?>" />
                                        <div class="content-cal">
                                            <h1>Nosotros</h1>
                                            <h2>Necesitas ayuda para calcular la cuota del financiamiento de tu nueva casa.
                                            </h2>
                                            <h3>utiliza nuestra calculadora de préstamo.
                                            </h3>
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
                                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
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
                                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                            </svg>
                        </div>
                        <!--#endregion Arrow Navigator Skin End -->
                        <a style="display: none" href="https://www.jssor.com">Bootstrap Carousel</a>
                    </div>
                    <!-- Jssor Slider End -->
                </div>
            </div>
            
        </div>
    </div>
    <!-- End slider-wrapper -->
    <!-- Start calculate-section -->
    <div class="calculate-section">
        <div class="container">
            <div class="calculate-form">
                <form>
                    <div class="col-md-5 col-xs-12 col-md-offset-1 calc-left">
                        
                        <h2>
                        candidad deudores
                        </h2>
                        <div class="btn-group btn-group-lg" role="group" >
                            <button type="button" value="1" id="btn1" class="btn calcactive btn-default calc-btn">1</button>
                            <button type="button"  value="2" id="btn2" class="btn btn-default calc-btn">2+</button>
                        </div>
                        <h2 class="mar_tp_90"> EDAD SOLICITANTE  </h2>
                        <input type="text" class="form-control" name="" placeholder="o Anos">
                        <br> <br>  <br>  <br> <br> <br> <br> <br> <br>

                        <h2>TASA INTERES</h2>
                        <div class="info">
                        <input type="text" class="form-control" name="" placeholder="1.00%">
                        <div class="info-content">
                                <div class="toll" data-toggle="tooltip" itle="Hooray!">
                                    <div class="tipp">
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Hello this is khairul IslamHello this is khairul">?</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2>INGRESOS FIJOS</h2>
                        <div class="info">
                        <input type="text" class="form-control" name="" placeholder="RD$ 0.00">
                        <div class="info-content">
                                <div class="toll" data-toggle="tooltip" itle="Hooray!">
                                    <div class="tipp">
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Hello this is khairul IslamHello this is khairul">?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-5  calc-right">
                        <h2>MONEDA</h2>
                        <div class="info">
                            <div class="btn-group btn-group-lg" role="group" >
                                <button type="button" id="rd" class="btn calcactive btn-default calc-btn">rd</button>
                                <button type="button" id="us" class="btn btn-default calc-btn ">us</button>
                                <button type="button" id="eu" class="btn btn-default calc-btn">eu</button>
                                
                            </div>
                            <div class="info-content">
                                <div class="toll" data-toggle="tooltip" itle="Hooray!">
                                    <div class="tipp">
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Hello this is khairul IslamHello this is khairul">?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                       <h2 class="mar_tp_90">  VALOR DELA VIVIENDA</h2>
                        <div class="info">
                            <input type="text" class="form-control" name="" placeholder="RD$ 0.00">
                            <div class="info-content">
                                <div class="toll" data-toggle="tooltip" itle="Hooray!">
                                    <div class="tipp">
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Hello this is khairul IslamHello this is khairul">?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2> MONTO SOLICITADO </h2>
                        <div class="info">
                            <input type="text" class="form-control" name="" placeholder="RD$ 5,000">
                            <div class="info-content">
                                <div class="toll" data-toggle="tooltip" itle="Hooray!">
                                    <div class="tipp">
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Hello this is khairul IslamHello this is khairul">?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2> GASTOS FIJOS</h2>
                        <div class="info">
                            <input type="text" class="form-control" name="" placeholder="RD$ 0.00">
                            <div class="info-content">
                                <div class="toll" data-toggle="tooltip" itle="Hooray!">
                                    <div class="tipp">
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Hello this is khairul IslamHello this is khairul">?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2> CANTIDAD DE ANOS</h2>
                        <div class="info">
                            <input type="number" class="form-control" name=""  value="1">
                            <div class="info-content">
                                <div class="toll" data-toggle="tooltip" itle="Hooray!">
                                    <div class="tipp">
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Hello this is khairul IslamHello this is khairul">?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center">
                        <input type="submit" class=" " id="submit" name="" value="CALCULAR">
                    </p>
                </form>
            </div>
            
            
        </div>
    </div>

    <div class="calculate-section">
        <div class="container">
            <h1>Result</h1>
            <div class="">
            
        </div>
    </div>
    
    <!-- End calculate-section -->
    
    <!-- Start footer -->
       <?php get_footer(); ?>
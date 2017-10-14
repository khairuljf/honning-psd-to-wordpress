<footer>
    <div class="container-fluid text-center ">
        <div class="col-md-8 col-md-offset-2">
            <h4>
                <i class="fa fa-phone" aria-hidden="true"></i><a href="<?php echo get_theme_mod('phone') ?>"><?php echo get_theme_mod('phone') ?></a> /<a href="<?php echo get_theme_mod('phone2') ?>"> <?php echo get_theme_mod('phone2') ?></a>
                <i class="fa fa-envelope" aria-hidden="true"></i> <?php echo get_theme_mod('mail') ?>|
              
                <a href="<?php echo get_theme_mod('fb') ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></i></a>
                <a href="<?php echo get_theme_mod('ig') ?>"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
            </h4>
            <p><span><?php echo get_theme_mod('addr') ?></span> <?php echo get_theme_mod('location') ?></p>
            <p class="copyright"> <?php echo get_theme_mod('copyright') ?></p>
        </div>
    </div>
</footer>
<!-- end footer -->
</div>
<!-- end main-wrapper -->
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo get_template_directory_uri() ?>/js/ie10-viewport-bug-workaround.js"></script>
<!-- jssor slider scripts-->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jssor.slider.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/custom.script.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/custom.js"></script><script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/custom-script.js"></script>
<script>
    jQuery(document).ready(function ($) {
        var options = {
            $AutoPlay: 1, //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
            $AutoPlaySteps: 1, //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $Idle: 2000, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1, //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
            $ArrowKeyNavigation: 1, //[Optional] Steps to go for each navigation request by pressing arrow key, default value is 1.
            $SlideEasing: $Jease$.$OutQuint, //[Optional] Specifies easing for right to left animation, default value is $Jease$.$OutQuad
            $SlideDuration: 800, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20, //[Optional] Minimum drag offset to trigger slide, default value is 20
//$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
//$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 0, //[Optional] Space between each slide in pixels, default value is 0
            $Cols: 1, //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $Align: 0, //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1, //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1, //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 1, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
            $ArrowNavigatorOptions: {//[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            },
            $BulletNavigatorOptions: {//[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$, //[Required] Class to create navigator instance
                $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                $Steps: 1, //[Optional] Steps to go for each navigation request, default value is 1
                $Rows: 1, //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX: 12, //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY: 4, //[Optional] Vertical space between each item in pixel, default value is 0
                $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
            }
        };
        var jssor_slider1 = new $JssorSlider$("slider1_container", options);
//responsive code begin
//you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider() {
            var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth) {
                jssor_slider1.$ScaleWidth(parentWidth - 30);
            } else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
//responsive code end
    });
</script>
<script>
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();
});
</script>
<?php wp_footer() ?>
</body>
</html>
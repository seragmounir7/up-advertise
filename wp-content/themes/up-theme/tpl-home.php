<?php
/* Template Name: Home Template */
get_header();
?>

<section id="intro-slider">
    <div>
        <div>
            <div class="slick-slide" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/slider1.jpg)">
                <div>
                    <h2 class="text-center">boundless</h2>
                    <div class="title text-center">Creative</div>
                    <div class="display-flex justify-content-center">
                        <a href="#" class="btn">about us</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="slick-slide" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/slider2.jpg)">
                <div>
                    <h2 class="text-center">unlimited</h2>
                    <div class="title text-center">Solutions</div>
                    <div class="display-flex justify-content-center">
                        <a href="#" class="btn">about us</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="slick-slide" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/slider3.jpg)">
                <div>
                    <h2 class="text-center">premium</h2>
                    <div class="title text-center">Solutions</div>
                    <div class="display-flex justify-content-center">
                        <a href="#" class="btn">about us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>
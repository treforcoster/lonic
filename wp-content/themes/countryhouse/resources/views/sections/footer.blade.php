<footer class="page-footer">

    <?php $background = get_field('menu_background', 'options'); ?>
    <div class="background" style="background-image:url('<?php echo $background; ?>');"></div>
    <div id="footer-cta" class="section section-line marker-title-h2-lead-in-footer p-t-mobile-element p-b-mobile-element p-t-desktop-element p-b-desktop-element bg-colour-dark text-white small">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12"><?php the_field('footer_text', 'options'); ?></div>
                </div>
            </div>
        </div>
    </div>

    <?php $template = get_page_template_slug(); ?>

    <?php if ($template != 'template-landing.blade.php') { ?>

        <div id="footer-navigation" class="section section-line marker-title-h2-small p-t-mobile-element p-b-mobile-intro p-t-desktop-element p-b-desktop-intro bg-colour-dark text-white small">


            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-3 p-b-mobile-section divider">
                            @php dynamic_sidebar('footer-1') @endphp
                        </div>
                        <div class="col-6 col-lg-2  medium p-b-mobile-element divider">
                            @php dynamic_sidebar('footer-2') @endphp
                        </div>

                        <div class="col-6 col-lg-2  medium p-b-mobile-section divider">
                            @php dynamic_sidebar('footer-3') @endphp
                        </div>

                        <div class="col-lg-2  medium p-b-mobile-section divider">
                            @php dynamic_sidebar('footer-4') @endphp
                        </div>

                        <div class="col-lg-3  medium p-b-mobile-element">
                            @php dynamic_sidebar('footer-5') @endphp
                        </div>
                    </div>

                </div>
            </div>
        </div>

    <?php } ?>




    <!-- <div id="footer-legal" class="section text-dark small p-t-mobile-element p-b-mobile-element p-t-desktop-element p-b-desktop-element">
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="footer-logo p-b-mobile-element p-b-desktop-element">
                            <img class="logo-dark" src="<?php the_field('logo_dark', 'options'); ?>">
                        </div>  
                        <?php the_field('footer_legal', 'options'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</footer>
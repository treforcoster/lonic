<footer class="footer section-footer padding-top-section padding-bottom-section small bg-dark-green text-white">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-4 padding-bottom-element divider no-bullets">
                <div class="padding-bottom-element">
                <img class="logo-footer" src="<?php the_field('logo_footer', 'options'); ?>">
                </div>
                @php dynamic_sidebar('footer-1') @endphp
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-6 col-lg-3  medium padding-bottom-element">
                        @php dynamic_sidebar('footer-2') @endphp
                    </div>
        
                    <div class="col-6 col-lg-3  medium padding-bottom-element ">
                        @php dynamic_sidebar('footer-3') @endphp
                    </div>
        
                    <div class="col-6 col-lg-3  medium padding-bottom-element d-none d-lg-block">
                        @php dynamic_sidebar('footer-4') @endphp
                    </div>
        
                    <div class="col-6 col-lg-3  medium padding-bottom-element ">
                        @php dynamic_sidebar('footer-5') @endphp
                    </div>
                </div>
            </div>    
           
        </div>
    </div>

</footer>
<?php

add_action('after_setup_theme', function () {
    if (function_exists('get_field')) {
        add_image_size('image-carousel', 1770, 1125, true);
        add_image_size('image-landscape', 1090, 745, true);
        // add_image_size('image-portrait', 670, 765, true);
        // add_image_size('featured-image', 1340, 890, true);
        // add_image_size('property-info', 1080, 1080, true);
        // add_image_size('gallery-image', 1920, 1080, true);

        // add_image_size('gallery-image-portrait', 1080, 610, true);
        // add_image_size('location-image', 695, 560, true);
        // add_image_size('team-image', 480, 370, true);
        // add_image_size('gallery-grid', 480, 370, true);
        // add_image_size('gallery-grid-large', 1270, 970, true);
        // $acf_image_sizes = get_field("image_sizes", "options");

        // if ($acf_image_sizes) {
        //     // add_image_size('acf-card-image', $acf_image_sizes['card_image_w'], $acf_image_sizes['card_image_h'], true);
        //     // add_image_size('acf-logo-image', $acf_image_sizes['logo_image_w'], $acf_image_sizes['logo_image_h'], true);
        //     // add_image_size('acf-text-image-square', $acf_image_sizes['text_image_w_square'], $acf_image_sizes['text_image_h_square'], true);
        //     // add_image_size('acf-text-image-landscape', $acf_image_sizes['text_image_w'], $acf_image_sizes['text_image_h'], true);
        //     // add_image_size('acf-text-image-portrait', $acf_image_sizes['text_image_w_portrait'], $acf_image_sizes['text_image_h_portrait'], true);
        //     // add_image_size('acf-large-image', $acf_image_sizes['large_header_image_w'], $acf_image_sizes['large_header_image_h'], true);
        //     // add_image_size('acf-icon-image', $acf_image_sizes['icon_image_w'], $acf_image_sizes['icon_image_h'], true);
        //     // add_image_size('acf-profile-image', $acf_image_sizes['team_profile_image_w'], $acf_image_sizes['team_profile_image_h'], true);
        //     // add_image_size('acf-gallery-image', $acf_image_sizes['gallery_w'], $acf_image_sizes['gallery_h'], true);
        //     // add_image_size('acf-floor-gallery-image', $acf_image_sizes['floor_gallery_w'], $acf_image_sizes['floor_gallery_h'], true);
        //     // add_image_size('acf-gallery-text-image', $acf_image_sizes['gallery_text_w'], $acf_image_sizes['gallery_text_h'], true);
        //     // add_image_size('acf-split-header-image', $acf_image_sizes['split_h_w'], $acf_image_sizes['split_h_h'], true);
        // }
    }
}, 20);

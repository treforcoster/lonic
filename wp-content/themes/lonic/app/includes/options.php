<?php

/**
 * If the ACF options plugin is installed, setup an options page
 */

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Map Settings',
        'menu_title'    => 'Map',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_page(array(
        'page_title'    => 'Testimonial Index',
        'menu_title'    => 'Testimonial Index',
        'parent_slug'   => 'edit.php?post_type=testimonial',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Contacts',
        'menu_title'    => 'Contacts',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_page(array(
        'page_title'    => 'Property Index',
        'menu_title'    => 'Index',
        'parent_slug'   => 'edit.php?post_type=property',
    ));

    acf_add_options_page(array(
        'page_title'    => 'Blog Index',
        'menu_title'    => 'Blog Index',
        'parent_slug'   => 'edit.php',
    ));
}

<?php

function wpb_mce_buttons_2($buttons)
{
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

function my_mce_before_init_insert_formats($init_array)
{

    // Define the style_formats array

    $style_formats = array(
        /*
        * Each array child is a format with it's own settings
        * Notice that each array has title, block, classes, and wrapper arguments
        * Title is the label which will be visible in Formats menu
        * Block defines whether it is a span, div, selector, or inline style
        * Classes allows you to define CSS classes
        * Wrapper whether or not to add a new block-level element around any selected elements
        */
        // array(
        //     'title' => 'Button CTA',
        //     'block' => 'span',
        //     'classes' => 'button-cta',
        //     'wrapper' => true,
        // ),

        // array(
        //     'title' => 'Inline Button CTA',
        //     'block' => 'span',
        //     'classes' => 'inline-button-cta',
        //     'wrapper' => true,
        // ),

        // array(
        //     'title' => 'Span',
        //     'block' => 'span',
        //     'classes' => 'span-wrapper',
        //     'wrapper' => true,
        // ),

        // array(
        //     'title' => 'Text CTA',
        //     'block' => 'span',
        //     'classes' => 'text-cta',
        //     'wrapper' => true,
        // ),

        array(
            'title' => 'Large Text',
            'block' => 'span',
            'classes' => 'large-text',
            'wrapper' => true,
        ),


        // array(
        //     'title' => 'Intro - Lead In',
        //     'inline' => 'span',
        //     'classes' => 'intro-in-heading',
        //     'wrapper' => true,
        // ),
        // array(
        //     'title' => 'Heading - Sub Heading',
        //     'inline' => 'span',
        //     'classes' => 'sub-heading',
        //     'wrapper' => true,
        // ),

        // array(
        //     'title' => 'Block Text link',
        //     'inline' => 'span',
        //     'classes' => 'block-text-link',
        //     'wrapper' => true,
        // ),

        // array(
        //     'title' => 'Block Text link',
        //     'inline' => 'span',
        //     'classes' => 'block-text-link',
        //     'wrapper' => true,
        // ),



    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode($style_formats);

    return $init_array;
}
// Attach callback to 'tiny_mce_before_init'
add_filter('tiny_mce_before_init', 'my_mce_before_init_insert_formats');

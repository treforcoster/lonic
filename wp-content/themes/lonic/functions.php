<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (!file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (!function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect([
    'setup',
    'filters',
    'includes/acf-admin-classes',
    'includes/gutenberg',
    'includes/image-sizes',
    'includes/options',
    'includes/theme-options-acf-functions-from-group',
    'includes/text-formats',
])
    ->each(function ($file) {
        if (!locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });


function my_password_form()
{
    global $post;
    $label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
    $o = '<section class="section-password-block p-t-mobile-section p-b-mobile-section p-t-desktop-section p-b-desktop-section medium text-dark"><div class="container-fluid"><div class="row p-b-mobile-section p-b-desktop-section"><div class="col-lg-6"><form action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
    ' . __("<h1><span class='lead-in-heading'>GALLERY</span>Please enter the password below to see photos from The Summer Lunch</h1>") . '
    <label for="' . $label . '">' . __("Password:") . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__("Submit") . '" />
    </form></div></div></div></section>
    ';
    return $o;
}
add_filter('the_password_form', 'my_password_form');

add_filter('wp_lazy_loading_enabled', '__return_true', 99);
add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
function misha_filter_function()
{

    //var_dump($_POST);



    $args = array(
        'orderby' => 'date', // we will sort posts by date
        'order'    => $_POST['date'],
        'post_type'        => 'property',
        'posts_per_page' => -1,
        'post_status' => 'publish',


    );

    // for taxonomies / categories
    if ($_POST['categoryfilter'] == '*' || $_POST['categoryfilter'] == '') {
    } else {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'location',
                'field' => 'id',
                'terms' => $_POST['categoryfilter'],
            )
        );
    }

    if ($_POST['statusFilter'] == '*' || $_POST['statusFilter'] == '') {
    } else {
        $args['meta_query'] = array(
            array(
                'key'        => 'status',
                'value'    => $_POST['statusFilter'],
            )
        );
    }


    if ($_POST['price_min'] != '' && $_POST['price_max'] != '') {
        $args['meta_query'][] = array(
            'key' => 'price',
            'value' => array((int)$_POST['price_min'], (int)$_POST['price_max']),
            'type' => 'numeric',
            'compare' => 'between',
            'relation' => 'AND'
        );
    } else {
        //if only min price is set
        if ($_POST['price_min'] != '') {
            $args['meta_query'][] = array(
                'key' => 'price',
                'value' =>  (int)$_POST['price_min'],
                'type' => 'numeric',
                'compare' => '>='
            );
        }

        if ($_POST['price_max'] != '') {
            $args['meta_query'][] = array(
                'key' => 'price',
                'value' =>  (int)$_POST['price_max'],
                'type' => 'numeric',
                'compare' => '<='
            );
        }
    }


    $query = new WP_Query($args);

    $rate =  get_field('currency_USDGBP', 'options');
    $eur_rate =  get_field('currency_USDEUR', 'options');

    $count = 0;

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>

            <?php if ($count > 2) {
                $display = "hidden";
            } ?>

            <?php $count++; ?>

            <div id="c<?php echo $count; ?>" class="property-post col-md-4 p-b-mobile-element p-b-desktop-intro <?php //echo $display;
                                                                                                                ?>">

                <a class="card-propery-archive" href="<?php the_permalink(); ?>">
                    <div class="inner text-dark medium">
                        <div class="featured-image ">


                            <?php $img_id = get_post_thumbnail_id(get_the_ID());
                            $image = wp_get_attachment_image_src($img_id, "featured-image", false, 'lazy');
                            $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

                            <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>">

                            <?php $image = get_field('image') ?>
                            <div class='hover-image'>
                                <?php if (!empty($image)) {
                                    // vars
                                    $url = $image['url'];
                                    $alt = $image['alt'];

                                    $sizedImage = $image['sizes']['featured-image'];


                                ?>
                                    <img src="<?php echo $sizedImage; ?>" alt="<?php echo $alt; ?>" class="lazyload">

                                <?php } ?>
                            </div>
                        </div>

                        <div class='info p-t-mobile-element-half  p-t-desktop-element-half'>
                            <div class='row'>
                                <div class='col-8'>
                                    <?php $terms = get_the_terms(get_the_ID(), 'location'); ?>

                                    <div class="location lead-in-heading"><?php echo $terms[0]->name; ?></div>

                                    <h3><?php the_title(); ?></h3>

                                </div>
                                <div class='col-4 text-right'>
                                    <?php $price_label = get_field('price_label', get_the_ID()); ?>
                                    <?php $price_data = get_field('price', get_the_ID()); ?>
                                    <?php if ($price_data) { ?>
                                        <div class="card-price price-gbp alt">

                                            <?php if ($price_label == "POA") { ?>

                                                <?php echo 'POA'; ?>

                                            <?php } else { ?>

                                                <?php $price = number_format((float)$price_data);
                                                echo '£' . $price; ?>

                                            <?php } ?>

                                        </div>

                                        <div class="card-price price-usd alt">

                                            <?php if ($price_label == "POA") { ?>

                                                <?php echo 'POA'; ?>

                                            <?php } else { ?>
                                                <?php $price = $price_data / $rate; ?>
                                                <?php $price = number_format((float)$price);
                                                echo '$' . $price; ?>

                                            <?php } ?>

                                        </div>

                                        <div class="card-price price-eur alt">

                                            <?php if ($price_label == "POA") { ?>

                                                <?php echo 'POA'; ?>

                                            <?php } else { ?>
                                                <?php $price = $price_data / $rate * $eur_rate; ?>
                                                <?php $price = number_format((float)$price);
                                                echo '€' . $price; ?>

                                            <?php } ?>

                                        </div>

                                    <?php } ?>

                                    <?php $status = get_field('status'); ?>
                                    <?php $new = get_field('new'); ?>

                                    <?php $date1 = get_the_date("Y-m-d");
                                    $date2 = date("Y-m-d");
                                    $diff = abs(strtotime($date2) - strtotime($date1));
                                    $years = floor($diff / (365 * 60 * 60 * 24));
                                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                                    $totalTime = ($years * 12) + $months;
                                    ?>
                                    <div class="tags end">
                                        <?php if ($new == 'yes' && $status == 'For Sale') { ?>
                                            <div class='tag red'>New</div>
                                        <?php } elseif ($status != 'For Sale') { ?>
                                            <?php if ($status == 'Under Offer') { ?>
                                                <div class='tag'><?php echo $status; ?></div>
                                            <?php } ?>
                                            <?php if ($status == 'Sold') { ?>
                                                <div class='tag'><?php echo $status; ?></div>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



        <?php endwhile; ?>



<?php
        wp_reset_postdata();
    else :
        echo get_field('no_properties_text', 'options');
    endif;

    die();
}



setUpCurrency();

function setUpCurrency()
{
    add_action('update_currency_rates', 'update_rates');

    if (!wp_next_scheduled('update_currency_rates'))
        wp_schedule_event(time(), 'daily', 'update_currency_rates');

    // This is for dev only
    //add_action('plugins_loaded',  'update_rates');
    //echo 'setup 2';
    //update_rates();
}

function update_rates()
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.apilayer.com/currency_data/live?source=USD&currencies=GBP,EUR",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain",
            "apikey: cZMe1JfvxjV8FGFoRZugc9HBIatFqQWd"
        ),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET"
    ));

    $field_name = 'currency_USDGBP';
    $field_name_eur = 'currency_USDEUR';
    $field_location = 'options';

    $response = curl_exec($curl);

    curl_close($curl);
    //echo $response;
    $decoded = json_decode($response);
    //update_option('currency_USDGBP', $decoded->quotes->USDGBP, false);
    update_field($field_name, $decoded->quotes->USDGBP, $field_location);
    update_field($field_name_eur, $decoded->quotes->USDEUR, $field_location);
    // 151
    //0.78409

    // echo 'update_rates';
    //     $field_name = 'currency_USDGBP';
    //     echo $field_name;
    //     echo '<br>';
    //     $field_location = 'options';
    //     echo $field_location;
    //     update_field($field_name, 'value2', $field_location);

}
/**
 * Enable vCard Upload 
 *
 */
function be_enable_vcard_upload($mime_types)
{
    $mime_types['vcf'] = 'text/vcard';
    return $mime_types;
}
add_filter('upload_mimes', 'be_enable_vcard_upload');

add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1()
{
    return 'class="next-page"';
}
function posts_link_attributes_2()
{
    return 'class="prev-posts"';
}

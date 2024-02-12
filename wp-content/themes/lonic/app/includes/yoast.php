<?php

function move_yoast_to_bottom()
{
    return 'low';
}
add_filter('wpseo_metabox_prio', 'move_yoast_to_bottom');

<?php
/*
Plugin Name: Dark Mode for Twenty Nineteen
Description: Dark Mode for Twenty Nineteen
Plugin URI:  http://shortscore.org
Version:     1.0
Author:      MarcDK
Author URI:  http://marc.tv
License URI: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/


add_action('wp_print_styles', 'enqueScripts');

function enqueScripts()
{  
    wp_enqueue_style("twentynineteen-darkmode", plugins_url('/darkmode.css', __FILE__));
}

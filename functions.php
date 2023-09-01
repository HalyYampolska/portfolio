<?php 

function portfolio_HY () {
    wp_enqueue_style('portfolio_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'portfolio_HY');

?>
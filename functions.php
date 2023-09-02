<?php 

function portfolio_HY () {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400;500;600');
    wp_enqueue_style('font-awesome', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
    wp_enqueue_style('portfolio_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('portfolio_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'portfolio_HY');

?>
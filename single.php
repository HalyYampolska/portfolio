<?php get_header();

    while(have_posts()) {
        the_post(); ?>
        <h1>This is progect</h1>
<?php }

    get_footer();
?>
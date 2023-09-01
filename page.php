<?php get_header();

    while(have_posts()) {
        the_post(); ?>
        <h1>This is a about and contact pages</h1>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php }

    get_footer();
?>
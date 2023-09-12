<?php get_header();

    while(have_posts()) {
        the_post(); ?>
        
        <div class="about">
        <h1 class="about__heading"><?php the_title(); ?></h1>
        <div class="about__content"><?php the_content(); ?></div>
        </div>
    <?php }


    get_footer();
?>
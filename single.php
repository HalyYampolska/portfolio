<?php get_header();

    while(have_posts()) {
        the_post(); ?>
        
        <h1 class="about__heading"><?php the_title(); ?></h1>
        <div class="about__content"><?php the_content(); ?></div>

        <p class="project__type">Type: <a href="<?php the_permalink(); ?>"><?php echo get_the_category_list(', '); ?></a></p>
        <p class="project__stack">Stack: <a href="<?php the_permalink(); ?>"><?php echo get_the_tag_list(' ', ', ' ); ?></a></p>
        
    <?php }


    get_footer();
?>
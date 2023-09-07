<?php get_header(); ?>
<div class="project-page">


        <h1 class="project-page__heading"><?php the_title(); ?></h1>
        <div class="project-page__content"><?php the_excerpt(); ?></div>
     
        <img class="project-page__photo" src="<?php the_post_thumbnail_url(); ?>" />
        <p class="project-page__type">Type: <a href="<?php the_permalink(); ?>"><?php echo get_the_category_list(', '); ?></a></p>
        <p class="project-page__stack">Stack: <a href="<?php the_permalink(); ?>"><?php echo get_the_tag_list(' ', ', ' ); ?></a></p>
        
        <div class="project-page__content"><?php the_content(); ?></div>
</div>

    <?php get_footer();
?>
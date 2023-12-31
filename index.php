<?php get_header();
?>

<div class="archive">

<h1 class="portfolio__heading">portfolio.</h1>

<section class="projects">
    <?php 
    
        while(have_posts()) {
            the_post(); ?>

        <div class="project">
                <img class="project__photo" src="<?php the_post_thumbnail_url(); ?>" />
                <h3 class="project__name"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                <p class="project__type">Type: <a href="<?php the_permalink(); ?>"><?php echo get_the_category_list(', '); ?></a></p>
                <p class="project__stack">Stack: <a href="<?php the_permalink(); ?>"><?php echo get_the_tag_list(' ', ', ' ); ?></a></p>
                <p class="project__text"><?php the_excerpt(); ?></p>
                <button class="btn__project"><a href="<?php the_permalink(); ?>">See More Details</a></button>
        </div>



    <?php
    }
    ?>
            
        </section>
    </div>    

<?php 
get_footer();
?>
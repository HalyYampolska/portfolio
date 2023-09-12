<?php get_header(); ?>

        <div class="front-page">

        <section class="acquaintance">
            
            <div class="hero">
            <img class="hero__img" src="https://images.unsplash.com/photo-1628126907372-761f54441c1b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fG93bHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
            <div class="typing">
                <h1 class="acquaintance__name">I glad to see you here!</h1>
                <p class="acquaintance__text">Highly motivated, with extensive experience working remotely with 
                    clients of various levels with English, Ukrainian and Russian language skills is seeking an 
                    opportunity to work in a team-oriented web development company. Five years of experience working 
                    with WordPress (as a content manager and webmaster) on small projects, excellent knowledge of 
                    HTML and CSS, familiarity with JavaScript and PHP coupled with a proven ability and passion 
                    for quickly learning new technologies ensure a quick result.</p>
            </div>
            
            </div>
            <div class="button__standart">    
                <button class="btn__standart"><a href="<?php echo site_url('/about'); ?>">More about me</a></button>
                <button class="btn__standart"><a href="<?php echo site_url('/blog'); ?>">Go to the Portfolio</a></button>
            </div>
        </section>

        <section class="skills">
            <h2 class="skills__name">Skills</h2>
            <div class="skill">
                <ul class="skill__list">
                    <div class="row-1">
                    <li><a href="">PHP</a></li>
                    <li><a href="">WordPress</a></li>
                    <li><a href="">CSS/SCSS</a></li>
                    <li><a href="">HTML</a></li>
                    </div>
                    <div class="row-2">
                    <li><a href="">JavaScript</a></li>
                    <li><a href="">GitHub</a></li>
                    <li><a href="">REST API</a></li>
                    </div>
                </ul>
            </div>
        </section>
        
        <h2 class="projects__name">My Recent Projects</h2>
        <section class="projects">
    <?php 
    $homepageProjects = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => -1,
    ));
    while($homepageProjects->have_posts()) {
        $homepageProjects->the_post(); ?>


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
        wp_reset_postdata(); 
        ?>
        </section>

        <section class="invite">
            <h2 class="invite__name">Let's chat!</h2>
            <div class="invite__buttons">
                <button class="btn__invite"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/downloads/Halyna-Yampolska.pdf" download>Download CV</a></button>
                <button class="btn__invite"><a href="<?php echo site_url('/contact'); ?>">Get in Touch</a></button>
            </div>
        </section>
        </div>

<?php

    get_footer();
?>
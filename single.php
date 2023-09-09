<?php get_header(); ?>
<div class="project-page">


        <h1 class="project-page__heading"><?php the_title(); ?></h1>
        <div class="project-page__content"><?php the_excerpt(); ?></div>
     
        <img class="project-page__photo" src="<?php the_post_thumbnail_url(); ?>" />
        <p class="project-page__type">Type: <a href="<?php the_permalink(); ?>"><?php echo get_the_category_list(', '); ?></a></p>
        <p class="project-page__stack">Stack: <a href="<?php the_permalink(); ?>"><?php echo get_the_tag_list(' ', ', ' ); ?></a></p>
        
        <div class="project-page__button">
            <?php
            $gitLink = get_field('project_link_git');
            if ($gitLink) {
                ?>
                <button class="project-page__github">
                    <a href="<?php echo esc_url($gitLink); ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.20-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.20-.36-1.02.08-2.12 0 0 .67-.21 2.20.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.20-.82 2.20-.82.44 1.10.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.20 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" fill="white"/>
                        </svg>
                        Code
                    </a>
                </button>
                <?php
            }
            ?>
            <button class="project-page__link">
                <a href="<?php the_field('project_link_live'); ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                    </svg>
                    View live
                </a>
            </button>
        </div>



        <div class="project-page__content"><?php the_content(); ?></div>

        <section class="invite invite__project">
            <h2 class="invite__name">Let's chat!</h2>
            <div class="invite__buttons">
                <button class="btn__invite"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/downloads/Halyna-Yampolska.pdf" download>Download CV</a></button>
                <button class="btn__invite"><a href="<?php echo site_url('/contact'); ?>">Get in Touch</a></button>
            </div>
        </section>
</div>

    <?php get_footer();
?>
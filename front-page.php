<?php get_header();

    while(have_posts()) {
        the_post(); ?>
        <section class="acquaintance">
            <div class="typing">
                <h1 class="acquaintance__name">I glad to see you here!</h1>
            </div>
            <p class="acquaintance__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse 
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                anim id est laborum.</p>
            <div class="button__standart">    
                <button class="btn__standart">More about me</button>
                <button class="btn__standart">Go to the Portfolio</button>
            </div>
        </section>

        <section class="skills">
            <h2 class="skills__name">Skills</h2>
            <div class="skill">
                <ul class="skill__list">
                    <li>PHP</li>
                    <li>WordPress</li>
                    <li>CSS/SCSS</li>
                    <li>HTML</li>
                    <li>JavaScript</li>
                    <li>GitHub</li>
                </ul>
            </div>
        </section>

        <section class="projects">
            <h2 class="projects__name">My Recent Projects</h2>
            <div class="project">
                <h3 class="project__name">Project 1</h3>
                <p class="project__type">Type: <a href="#">Website</a></p>
                <p class="project__stack">Stack: <a href="#">HTML, CSS & SCSS, JavaScript, iQuery, npm, PHP, WordPress</a></p>
                <p class="project__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse 
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                    anim id est laborum.
                </p>
                <button class="btn__project">See More</button>
            </div>
        </section>

        <section class="invite">
            <h2 class="invite__name">Let's chat!</h2>
            <div class="invite__button">
                <button class="btn__invite">Download CV</button>
                <button class="btn__invite">Get in Touch</button>
            </div>
        </section>
        

<?php }

    get_footer();
?>
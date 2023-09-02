<?php get_header();

    while(have_posts()) {
        the_post(); ?>
        <section class="acquaintance">
            <h1 class="acquaintance__name">My name will be here with JS</h1>
            <p class="acquaintance__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse 
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                anim id est laborum.</p>
            <div class="botton__standrt">    
                <button class="btn__standart">About me</button>
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

    
        

<?php }

    get_footer();
?>
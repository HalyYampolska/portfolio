<?php get_header();

    while(have_posts()) {
        the_post(); ?>
        <section class="acquaintance">
            
            <div class="hero">
            <img class="hero__img" src="https://images.unsplash.com/photo-1628126907372-761f54441c1b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fG93bHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
            <div class="typing">
                <h1 class="acquaintance__name">I glad to see you here!</h1>
                <p class="acquaintance__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse 
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                anim id est laborum.</p>
            </div>
            
            </div>
            <div class="button__standart">    
                <button class="btn__standart">More about me</button>
                <button class="btn__standart">Go to the Portfolio</button>
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
            <div class="project">
                <img class="project__photo" src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
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
                <button class="btn__project">See More Details</button>
            </div>
            <div class="project">
                <img class="project__photo" src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                <h3 class="project__name">Project 2</h3>
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
                <button class="btn__project">See More Details</button>
            </div>
            <div class="project">
                <img class="project__photo" src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                <h3 class="project__name">Project 3</h3>
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
                <button class="btn__project">See More Details</button>
            </div>
        </section>

        <section class="invite">
            <h2 class="invite__name">Let's chat!</h2>
            <div class="invite__buttons">
                <button class="btn__invite">Download CV</button>
                <button class="btn__invite">Get in Touch</button>
            </div>
        </section>
        

<?php }

    get_footer();
?>
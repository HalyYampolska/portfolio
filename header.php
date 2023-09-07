<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
    
    <header class="header">
    
        <div class="header__name-menu"><a href="<?php echo site_url(); ?>">Halyna Yampolska</a></div>
        <div class="header__menu">
            <ul>
                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
                <li><a href="<?php echo site_url('/blog'); ?>">Portfolio</a></li>
                <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
            </ul>
        </div>
    </div>
    
    </header>
    

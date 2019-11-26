<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <header class='headerContainer'>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class='logo'>
            <?php echo wp_get_attachment_image(56, 'small')?>
        </a>
        <nav class='menu'>
            <?php wp_nav_menu(array('theme_location' => 'top-nav')) ?>
        </nav>
        <div class='headSocial'>
            <a><img /></a>
            <a><img/></a>
            <a><img/></a>
        </div>  
    </header>
    <div class='shadow'></div>
    <div class='cover'></div> 
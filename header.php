<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rad Animal Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="The blog all about animals and their conenction to us and the world. Rad facts, weird stories, and hard to stomach truths. Funny, sad, and spot on, check out the blog to find something you never knew and will never forget.">
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
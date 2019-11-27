<?php 
/*
 * Template Name: Store Page
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <header class='storeHeaderContainer'>
        <nav class='menu'>
            <?php wp_nav_menu(array('theme_location' => 'top-nav')) ?>
        </nav>
    </header>

<div class='storeContainer'>

    <div class='heroContainer'>
        <?php echo wp_get_attachment_image(110, 'full') ?>
        <pre class='storeBannerText'>Rad Animal 
            Merch</pre>
    </div>
</div>

<?php echo get_post_field('post_content', 59); ?>

<?php get_footer();?>
<?php 
/*
 * Template Name: Store Page
 */
get_header();
?>

<div class='storeContainer'>

    <div class='heroContainer'>
        <?php echo wp_get_attachment_image(110, 'full') ?>
    </div>
</div>

<?php echo get_post_field('post_content', 59); ?>

<?php get_footer();?>
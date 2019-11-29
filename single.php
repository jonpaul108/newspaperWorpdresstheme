<?php 
/*
 * Template Name: Single
 */
get_header();
?>

<div class='singleContainer'>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h2 class='singleTitle'><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php echo get_the_date(); ?>

    <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php 


get_footer();
?>
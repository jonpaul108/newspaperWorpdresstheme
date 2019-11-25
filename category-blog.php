
<?php 

/*
 * Template Name:  Blog Category
 */

get_header();
?>

<div class='.blogPageWrapper'>
            <?php 
                    if (have_posts()) :
                            while (have_posts()) : the_post();
                ?>
                <div class='listing'>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <a href='<?php the_permalink() ?>' class='thumbnail'><?php the_post_thumbnail(); ?></a>
                                <?php the_excerpt(); ?>
                    </div>                
            <?php 
                endwhile;
                else :
                    echo '<p>NoContent found</p>';
                endif;
            ?>  
            </div>    


<?php get_footer();?>
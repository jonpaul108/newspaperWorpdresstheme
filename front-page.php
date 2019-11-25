
<?php 

/*
 * Template Name: Front Page
 */

get_header();
?>
    <div class='container'>
        <div id='heroImage'>
            <?php echo wp_get_attachment_image(13, 'full')?>   
            <button class='latestPostButton'>Latest Post</button>     
        </div>
        <div class='slogan'>
            <p>"It's wonderful to climb the liquid mountains of the sky. Behind me and before me is God and I have no fears." </p>
            <p>-Helen Keller</p>
        </div>
        <div class='listingWrapper'>
            <?php 
                    if (have_posts()) :
                            while (have_posts()) : the_post();
                ?>
                <div class='listing'>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <a class='thumbnail'><?php the_post_thumbnail(); ?></a>
                                <?php the_excerpt(); ?>
                    </div>                
            <?php 
                endwhile;
                else :
                    echo '<p>NoContent found</p>';
                endif;
            ?>  
            </div>    
            <div class='extrasContainer'>
                <aside id='shirts'>
                    <a class='shirtPic'>
                        <?php echo wp_get_attachment_image(45, 'medium')?>
                     </a>
                </aside>
                <div id='socialMedia'>
                    <h3>Follow us</h3>
                    <a>
                        <?php echo wp_get_attachment_image(52, 'medium')?>
                    </a>
                    <a>
                        <?php echo wp_get_attachment_image(53, 'medium')?>
                    </a>
                    <a>
                        <?php echo wp_get_attachment_image(54, 'medium')?>
                    </a>
                </div>
            </div>
    
<?php get_footer();?>


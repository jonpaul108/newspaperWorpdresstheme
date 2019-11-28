<?php 
/*
 * Template Name: Store Page
 */
get_header('new');
?>



<div class='storeContainer'>
    <div class='heroContainer'>
        <?php echo wp_get_attachment_image(110, 'full') ?>
        <pre class='storeBannerText'>Rad Animal 
            Merch
        </pre>
        <div class='elephantContainer'>
            <?php echo wp_get_attachment_image(112, 'full') ?>
        </div>
    </div>
    <aside class='storeMenu' > 
        <?php wp_nav_menu(array('theme_location' => 'store-nav')) ?>
    </aside>
    <div class='shirtContainer'>
        <?php 
        global $post;
     
        $myposts = get_posts( array(
            'numberposts' => 10,
                'post_type'   => 'Shirts',
        ) );
        

              if ($myposts) :
                  foreach($myposts as $post):
                        setup_postdata($post); ?>
                        <h2>
                            <a href='<?php the_permalink();?>' >
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <?php the_content(); ?>
                
         <?php
              endforeach; 
                wp_reset_postdata();
                else  :
                    echo '<p>no content</p>'; 
                endif;        
        ?>
    </div>
</div>

<?php echo get_post_field('post_content', 59); ?>

<?php get_footer();?>
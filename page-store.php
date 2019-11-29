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
    <div class='shirtText'>
             <p>
                Bringing you rad and awesome animal themed and world inspired t-shirts.
            </p>
            <div></div>
        <p>
        Funny and cool animal themed tees.<br>
        Straight from our content creators, you won't find these designs anywhere else.<br> 
        And the best news? 20% of profits goes to support the environment.<br>
        Mens, womens, childrens. Check out our collection today.
        </p>
        <p>New Shirts</p>
        <div></div>
    </div>
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
                    <div class='shirtListing'>
                        <h2>
                            <a href='<?php the_permalink();?>' >
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <?php the_post_thumbnail(); ?>
                        <div class='shirtPrice'>
                            <?php echo get_post_meta($post->ID, 'Price', true); ?>
                        </div>
                  </div>  
         <?php
              endforeach; 
                wp_reset_postdata();
                else  :
                    echo '<p>no content</p>'; 
                endif;        
        ?>
    </div>
</div>

<?php get_footer();?>
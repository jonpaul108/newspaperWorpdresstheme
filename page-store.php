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
        And the best news? 10% of profits goes to support the environment.<br>
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
                        <div class="title">
                              <?php the_title(); ?>
                  </div>
                        <?php the_post_thumbnail(); ?>
                        <div class='shirtPrice'>
                            <?php echo get_post_meta($post->ID, 'Price', true); ?>
                        </div>
                  </div>  
                  
                  <div class='modal'> 
                    <div class='modal-content'>
                     <span class='close'>x</span>
                     <?php the_post_thumbnail(); ?>
                     <div class='modal-shirt-price'>
                            <?php echo get_post_meta($post->ID, 'Price', true); ?>
                    </div>
                    <h2><?php the_title(); ?></h2>
                    <div class='shirtDesc'>
                            <?php echo get_post_meta($post->ID, 'Description', true); ?>
                    </div>
                        <a class='amzBtn' href='<?php echo get_post_meta($post->ID, 'Amazon Link', true); ?>'>See on Amazon</a>
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
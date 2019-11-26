
<?php 

/*
 * Template Name:  Blog Category
 */

get_header();
?>

<div class='blogMenuContainer'>
    <h1 id='blogName'>Rad Animal Blog</h1>
    <div></div>
    <nav id='categories'>
        <?php wp_nav_menu(array('theme_location' => 'blog-nav')) ?>
    </nav>
</div>


<div class='blogPageWrapper'>
            <?php 
                    if (have_posts()) :
                            while (have_posts()) : the_post();
                ?>
                <div class='blogListing'>
                    <a class='blogTitle' href="<?php the_permalink(); ?>">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                    </a>
                    <a href='<?php the_permalink() ?>' class='blogThumbnail'>
                        <?php the_post_thumbnail(); ?>
                    </a>
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
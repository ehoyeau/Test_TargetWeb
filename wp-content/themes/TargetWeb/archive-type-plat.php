<?php
/*
WpTutsPlus tutorial for creating archive to display posts by taxonomy term
Archive template for animal custom post type
*/
?>
 
<?php get_header(); ?>
 
    <div id="main-content" class="main-content">
 
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
 
            <h1 class="archive-title">
                <?php post_type_archive_title(); ?>
            </h1>

            <?php //les taxonomy
                $terms = get_terms( 'plat', array(
                'orderby'    => 'count',
                'hide_empty' => 0
                ) );
            ?> 

            <?php
            // now run a query for each recettes family
            foreach( $terms as $term ) {
 
                // Define the query
                $args = array(
                    'post_type' => 'recettes',
                    'plat' => $term->slug
                );
                $query = new WP_Query( $args );
                         
                // output the term name in a heading tag                
                echo'<h2>' . $term->name . '</h2>';
                 
                // output the post titles in a list
                echo '<ul>';
                 
                    // Start the Loop
                    while ( $query->have_posts() ) : $query->the_post(); ?>
             
                    <li class="plat-listing" id="post-<?php the_ID(); ?>">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                     
                    <?php endwhile;
                 
                echo '</ul>';
                 
                // use reset postdata to restore orginal query
                wp_reset_postdata();
             
            } ?>
                         
        </div><!-- #content -->
    </div><!-- #primary -->
</div><!-- #main-content -->
 
<?php
get_sidebar();
get_footer();
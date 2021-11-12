<?php
/*
Template Name: Page d'acceuil
Template Post Type: post, page, product
*/
get_header();

//Post des recettes

$args = array(
    'post_type' => 'recettes',
    'posts_per_page' => 4,
);
$query = new WP_Query($args);

if($query->have_posts()): ?>

    <h2 class="acceuil">Les dernières recettes : </h2>
    <section style="text-align:center">
        <?php while ($query->have_posts()):
            $query->the_post(); ?>
            <article class="article_recette">
                <h3 class="titre_recette"><?php echo get_the_title();?></h3>
                <p class=""><?php the_time('d/m/Y'); ?> par <?php the_author(); ?></p>
                <?php the_post_thumbnail('medium'); ?>
                <p class="intro"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink();?>"class="">Consulter</a>
            </article>
        <?php endwhile; ?>
    </section>
<?php endif;


get_footer();

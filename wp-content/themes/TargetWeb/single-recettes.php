<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

if(have_posts()){
	while(have_posts()){
		the_post();?>

    <div class="recette-presentation">

        <div class="recette-image">
            <?php the_post_thumbnail('full'); ?>
        </div>

        <div class="recette-text">

          <h1 id="recette-titre"><?php  the_title(); ?></h1>

            <p class="recette"><?php echo 'Liste des ingredients : ' .get_field('liste_des_ingredients'); ?></p>
            <p class="recette"><?php echo 'Temps de cuisson : ' .get_field('temps_de_cuisson');?></p>
            <p class="recette"><?php echo 'Etapes de la recette : ' .get_field('etapes');?></p>

            <div class="recette-contenus">
                <?php
                the_content();
                ?>
            </div>

            <p>Commentaires des internautes :<br>
                <?php
                $note= get_field('notes');

                for($i=0;$i<$note;$i++){

                   ?><span class="dashicons dashicons-star-filled"></span><?php

                };?><br>

                <?php the_field('commentaires')?>
            </p>

        </div>

    </div>

    <a href="<?php bloginfo('url'); ?>">Retour</a>
<?php
	
            }
}

get_footer();
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Josefin+Sans&display=swap" rel="stylesheet"> 
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body class="recette_body">
    <header class="entete" style='background-image: url("<?php echo get_stylesheet_directory_uri() . '/img/32276.jpg' ?>")'>
      <h1>Bienvenue sur le site de recettes qui en jette !</h1>
        <a href='https://fr.freepik.com/vecteurs/nourriture'>Nourriture vecteur créé par macrovector - fr.freepik.com</a>
    </header>

<!-- Barre de navigation qui récupère les taxonomies -->
    <nav class="menu" style='width:100%; height:auto; background-color:darkcyan; color:white'>
    <?php $terms = get_terms(
                    array(
                        'taxonomy'=>'plat'
                    )
                );

                if (!empty($terms)):?>
                    <ul class='archive-terms' style='text-align:center'>
                        <?php foreach ($terms as $term): ?>
                            <li class='nav-li' style='text-decoration:none; display:inline-block; '>
                                <a class='nav-li-a' style='color:white;font-weight: 900; font-size: 30px;margin:0 2em' href='/<?php echo $term->taxonomy;?>/<?php echo $term->slug;?>'>
                                    <?php echo $term->name; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
    </nav>
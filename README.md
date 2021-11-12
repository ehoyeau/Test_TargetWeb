# Test_TargetWeb
Réaliser un thème Wordpress From Scratch + Création de CPT

## Installation (linux)
-Installer Wordpress dans le dossier /var/www/html/nom_du_site  
-Changer les droits du nouveau dossier avec la commande du terminal suivante :  
sudo chown -R www-data:www-data ( donne les droits en écriture au serveur )  

- Télécharger le dossier wp-content et le déplacer dans le dossier de wordpress avec la commande sudo mv  
- Télécharger le fichier TargetWeb.sql, dans phpmyAdmin récupérer ce fichier dans l'onglet importer  

- Dans le navigateur taper l'adresse : localhost/nom_du_site et réponder aux différentes questions avec pour base de données le nom du fichier sql précédemment téléchargé  


## Plugins utilisés :
-ACF : pour la création des nouvelles recettes  
-Yoast SEO : pour une aide à un meilleur référencement SEO  
-Akismet Anti-Spam

## Librairies :
- Bootstrap
- Fonts google

## Ajout
- J'ai ajouté une taxonomy pour catégoriser les plats  

## TODO :
- mise en forme du menu, trier Entrée Plat Dessert ainsi que sa meilleur responsivité  
- afficher la page d'archive des taxonomy ( je n'ai sans doute pas utilisé la bonne méthode )
- meilleur responsivité  
- sans doute améliorer le design  
- ajouter des taxonomy pour filtrer avec ou sans cuisson, en fonction des produits ...  
- ajouter un formulaire de saisie des commentaires  
- ...  

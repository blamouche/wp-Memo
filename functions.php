<?php

//-1-Déclarer un menu dans l'interface de Wordpress
register_nav_menu('primary','Menu principal');

//-2-Définir une image clé et une taille
add_theme_support('post-thumbnails');
add_image_size('750-200',750,200,true);
?>
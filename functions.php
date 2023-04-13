<?php
function ajouter_styles() {
                        
    wp_enqueue_style('styles-principale', //identificateur du link css
                        get_template_directory_uri() .'/style.css', //endroit ou se trouve le fichier style css
                        array(), //les fichiers css qui depende de style css 
                        filemtime(get_template_directory() . '/style.css'));//version de notre style.css
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

/* -------------------------------- enregistrement des menu */
        function enregistrement_nav_menu(){
            register_nav_menus( array(
                'principal' => 'Menu principal',
                'footer'  => 'Menu pied de page',
            ) );
        }
        add_action( 'after_setup_theme', 'enregistrement_nav_menu', 0 );

/* --------------------------------- add_theme_support()*/
add_theme_support('title-tag');
add_theme_support('custom-logo', 
                        array(
                            'height' => 68,
                            'width'  => 68,
) );
add_theme_support( 'post-thumbnails' );
add_theme_support('custom-background');
/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal( $query ) {
    if ( $query->is_home() 
        && $query->is_main_query() 
        && ! is_admin() ) {
      $query->set( 'category_name', '4w4' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', 'cidweb_modifie_requete_error' );

     function cidweb_modifie_requete_error( $query ) {
        if ( $query->is_404() 
            && $query->is_main_query() 
            && ! is_admin() ) {
          $query->set( 'category_name', '4w4' );
          $query->set( 'orderby', 'title' );
          $query->set( 'order', 'ASC' );
          }
         }
         add_action( 'pre_get_posts', 'cidweb_modifie_requete_error' );
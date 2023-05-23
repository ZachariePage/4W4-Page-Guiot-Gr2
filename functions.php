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

//  function ajouter_description_class_menu( $items, $args ) {
//     // Vérifier si le menu correspondant est celui que vous souhaitez modifier
//     if ( 'evenement' === $args->menu ) {
//         foreach ( $items as $item ) {            
//             // Récupérer le titre, la description et la classe personnalisée
//             $titre = $item->title;
//             $description = $item->description;
//             $classe = $item->classe; // Remplacer par le nom de la classe souhaitée

//             // Ajouter la description et la classe personnalisée à l'élément de menu
//             $item->title .= '<span class=>' . $description . '</span>';
//         }
//     }
//     return $items;
// }
function add_menu_description_and_thumbnail( $item_output, $item, $depth, $args ) {
    if ( 'evenement' == $args->menu ||'block-archive' == $args->menu || 'lapin' ==$args->menu) {
        $post_thumbnail_id = get_post_thumbnail_id( $item->object_id );
        if ( $post_thumbnail_id ) {
            $post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail' );
            $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="title">' . $item->title . '</span><span class="description">' . $item->description . '</span><img src="' . esc_url( $post_thumbnail_url[0] ) . '" class="menu-thumbnail" />', $item_output );
        } else {
            $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="title">' . $item->title . '</span><span class="description">' . $item->description . '</span>'. '<span class="image"></span>', $item_output );
        }
    }
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'add_menu_description_and_thumbnail', 10, 4 );
//add_filter( 'wp_nav_menu_objects', 'ajouter_description_class_menu', 10, 2 );
// function add_menu_description_and_thumbnail( $item_output, $item, $depth, $args ) {
//     if ( 'evenement' == $item->menu_item_parent && 'post_type' == $item->object ) {
//         $post_thumbnail_id = get_post_thumbnail_id( $item->object_id );
//         if ( $post_thumbnail_id ) {
//             $post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail' );
//             $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="title">' . $item->title . '</span><span class="description">' . $item->description . '</span><img src="' . esc_url( $post_thumbnail_url[0] ) . '" class="menu-thumbnail" />', $item_output );
//         } else {
//             $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="title">' . $item->title . '</span><span class="description">' . $item->description . '</span>', $item_output );
//         }
//     }
//     return $item_output;
// }
// add_filter( 'walker_nav_menu_start_el', 'add_menu_description_and_thumbnail', 10, 4 );
function cidweb_modifie_requete_principal( $query ) {
    if ( $query->is_home() 
        && $query->is_main_query() 
        && ! is_admin() ) {
      $query->set( 'category_name', 'accueil' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts',  'cidweb_modifie_requete_principal' );

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



         /* -----------------------------------------Enregistrer le sidebar  ---*/

         /*function perso_menu_item_title($title, $item, $args) {
            // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
            if($args->menu == 'cours') { // on filtre uniquement le menu «cours»
            // Modifier la longueur du titre en fonction de nos besoins
            $sigle = substr($title,4,3);
            $title = substr($title, 7);
            $title = "<code>" .$sigle. "</code>" . "<p>" . wp_trim_words($title, 1, ' ... ') . "</p>" ; // A modifier am.liorer pour le tp1
            }
            if($args->menu == 'note-4w4') { 
                if (substr($title,0,1) == '0'){
                    $title = substr($title, 1);
                }    
            }*/

         function enregistrer_sidebar() {
            register_sidebar( array(
                'name' => __( 'Footer 1', '4W4-Zacharie' ),
                'id' => 'footer_1',
                'description' => __( 'Une zone de widget pour afficher des widgets dans le pied de page.', '4W4-Zacharie' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ) );
        
            register_sidebar( array(
                'name' => __( 'Footer 2', '4W4-Zacharie' ),
                'id' => 'footer_2',
                'description' => __( 'Une zone de widget pour afficher des widgets dans le pied de page.', '4W4-Zacharie' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ) );
        
            register_sidebar( array(
                'name' => __( 'Footer 3', '4W4-Zacharie' ),
                'id' => 'footer_3',
                'description' => __( 'Une zone de widget pour afficher des widgets dans le pied de page.', '4W4-Zacharie' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ) );
            register_sidebar( array(
                'name' => __( 'Footer 4', '4W4-Zacharie' ),
                'id' => 'footer_4',
                'description' => __( 'Une zone de widget pour afficher des widgets dans le pied de page.', '4W4-Zacharie' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ) );
        }
        add_action( 'widgets_init', 'enregistrer_sidebar' );

        
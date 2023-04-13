<div class="errorCourMenu">
    <h3 class="menuSecondaire">Nos choix de cours</h3>
    <?php 
    $ma_categorie  = "4w4";
    if (in_category('cours')){
        $ma_categorie  = "cours";
    }
    wp_nav_menu(array(
        "menu" => $ma_categorie,
        "container" => "nav"  
    )); ?>
    </div>
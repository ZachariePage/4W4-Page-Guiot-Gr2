<aside class="site__aside">
    <h3 class="menuSecondaire">Menu secondaire</h3>
    <?php 
    $ma_categorie  = "4w4";
    if (in_category('cours')){
        $ma_categorie  = "cours";
    }
    else if(is_page('')){
        $ma_categorie = "menuExamAside";
    }
    wp_nav_menu(array(
        "menu" => $ma_categorie,
        "container" => "nav"  
    )); ?>
    <div class="lapinMenus"><img src="rabbit.svg" alt=""></div>
    
    <div class="lapinMenu"></div>
</aside>
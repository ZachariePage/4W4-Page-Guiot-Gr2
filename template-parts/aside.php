<aside class="site__aside">
    <?php if(!is_page('')){?>
    <h3 class="menuSecondaire">Menu secondaire</h3>
    <?php } ?>
    <?php 
    $ma_categorie  = "4w4";
    if (in_category('cours')){
        $ma_categorie  = "cours";
    }
    else if(is_page('')){
        
        $ma_categorie = "menuExamAside";
        ?><div class="imgContainer">
            <?php
            the_post_thumbnail('thumbnail');?>
        </div>
        <h3 class="menuSecondaire">Nos atelier</h3><?php
        wp_nav_menu(array(
            "menu" => $ma_categorie,
            "container" => "nav"  
        )); 
    }
    if(!is_page('')){
        
        wp_nav_menu(array(
            "menu" => $ma_categorie,
            "container" => "nav"  
        )); 
    }?>
    <div class="lapinMenus"><img src="rabbit.svg" alt=""></div>
    
    <div class="lapinMenu"></div>
</aside>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Dancing+Script:wght@500&family=Lato:wght@700&family=Playfair+Display:wght@600&family=Roboto+Slab:wght@300;400;700&family=Roboto:wght@300;400;700&family=Rubik+Moonrocks&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<?php 
/*
  $nouvelle_classe = ""
  if (is_front_page()){
    $nouvelle_classe = 'no-aside';
  }
*/
?>
<!-- body class="site  // $nouvelle_classe " -->
<body class="site <?php echo (is_front_page()?'no-aside':'');?>">

   <header class="site__header">
    <section class="site__header__logo">
      <div class="siteDivPremier">

        <div class="logo"><?php the_custom_logo(); ?></div>
        <div class="rotatingText-content">
      <h2 class="rotatingText-adjective">Note de cour</h2>
      <h2 class="rotatingText-adjective">Classe</h2>
      <h2 class="rotatingText-adjective">Animal Cute</h2>
      <h2 class="rotatingText-adjective"><?= bloginfo('name') ?></h2>
        </div>
      </div>
      <div class="menu__recherche">
            <input type="checkbox" id="chkMenu">
            <?php wp_nav_menu(array(
            "menu" => "entete",
            "container" => "nav"
            )) ?>
        
            <?php  get_search_form(); ?>
            <label class="burger" for="chkMenu"><img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="20" height="20"></label>
           
      </div>  
    </section>
    
   </header>

    <?php 
    if ( ! is_front_page()){
    get_template_part("template-parts/aside"); 
    }
    ?>

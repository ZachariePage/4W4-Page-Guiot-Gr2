<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php wp_head(); ?>
<body>
    <header class="site_header">
        <section class="titre_header_logomenu">
            <?php the_custom_logo() ?>
            <p class="menuWp"><?php wp_nav_menu(array
            ("menu" => "entete", 
            "container" => "nav" ))
             ?> </p>
            <h1> <a href="<?php echo bloginfo('url') ?>"><?php echo bloginfo('name') ?></a></h1>
        </section>
        <h2 class="desc"><?php echo bloginfo('description') ?>-</h2>
    </header>
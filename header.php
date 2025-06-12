<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        wp_head();
    ?>
<header>
<?php
    if(! is_page('landing-page')):
?>

     <section class="menu_area">
        <div class="container">
            <nav class="main_menu"> 
                <button class="check-button">
                    <div class="menu-icon">
                    <div class="bar1"></div>
                    <div class="bar1"></div>
                    <div class="bar1"></div>
                </div>
                </button>
                <?php wp_nav_menu(array('theme_location' => 'wp_devs_main_menu', 'depth' => 2,));?>
            </nav>
        </div>
     </section>
<?php endif; ?>
</header>
<body>
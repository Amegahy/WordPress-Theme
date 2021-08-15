<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Theme Tester</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head();?>
</head>
<body>
    <header>
        <div class="container">
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navbar',
            )
        )?>
        </div>
    </header>
<div class="container py-5">
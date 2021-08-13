<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Theme Tester</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<?php wp_nav_menu(
    array(
        'theme_location' => 'top-menu',
        'menu_class' => 'navbar navbar-light bg-dark',
    )
)?>
<div class="container">
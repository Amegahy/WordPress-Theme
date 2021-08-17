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
        <div class="container navbar-container p-0">
            <div class="mobile-nav-toggler-container">
                <span class="mobile-nav-toggler"></span>
            </div>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navbar hidden',
                'walker' => new Sub_Menu_Walker(),
                'depth' => 2
            )
            );
            
            class Sub_Menu_Walker extends Walker_Nav_Menu {
                function start_lvl(&$output, $depth) {
                  $indent = str_repeat("\t", $depth);
                  $output .= "\n$indent<ul class=\"sub-menu hidden\">\n";
                }
            }
        ?>
        </div>
    </header>
<div class="container min-vh-100 py-5">
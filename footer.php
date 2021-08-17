</div>
<footer>
<?php wp_nav_menu(
    array(
        'theme_location' => 'footer',
        'menu_class' => 'footer container m-auto',
        'depth' => 1
    )
    );
?>
</footer>
<?php wp_footer();?>
</body>
</html>
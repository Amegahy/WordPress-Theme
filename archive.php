<?php get_header();?>
<div class="bootsrap">
    <div class="row">
        <h1><?php single_cat_title();?></h1>
        <?php if(have_posts()) : while(have_posts()) : the_post();?>
            <h3><?php the_title();?></h3>
            <?php the_excerpt();?>
            <a href="<?php the_permalink();?>">Click here</a>
        <?php endwhile; endif;?>
    </div>
</div>
<?php get_footer();?>
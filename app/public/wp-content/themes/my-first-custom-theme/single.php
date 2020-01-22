<link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">

<?php
    while(have_posts()) {
            the_post(); ?>
            <h2><?php the_title(); ?> </h2>
            <?php the_content(); 
    }            
?>
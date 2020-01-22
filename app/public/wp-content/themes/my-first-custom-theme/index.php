<link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">


<h2 class='intro'><?php   bloginfo('name');?></h2>
<h3 class='intro_description'>Integrated functions that I was learned:</h3>
<div class="integrated_func">
    <h4>bloginfo('')</h4>
    <p>Arguments:</p>
    <ul>
        <li>name        - show the blog`s name</li>
        <li>description - show the blog`s desckription</li>
        <li>temlate_url - show the full url where this theme placed</li>
    </ul>
    <hr>
    <h4>have_posts()</h4>
    <p>Relative functoins:</p>
    <ul>
        <li>the_title()     - show the title of post</li>
        <li>the_content()   - show the content of post</li>
        <li>the_permalink() - show the link of post</li>
    </ul>
</div>

<?php

 #Lesson 3.2 (functions)
    function greet($name, $color) {
        echo "<p>Hi, my name is $name and my favorite color is $color.</p>";
    } 
    greet("Dmitry", "black");


#Lesson 3.3 (arrays + loop while)
    $namesExample = array('Dmitry', 'John', 'Alex', 'Bred', 'Peter', 'Gavin', 'Richard');

    $count = 0;
    while($count < count($namesExample)) {
        echo "<li class='l3_1'>$namesExample[$count]</li>";
        $count++;
    }


?>


<?php  #videocdn players
    $moviesId = array('863', '584405', '81750');

    $count = 0;
    while($count < count($moviesId)) {
        #echo "<iframe src='//8.tvmovies.in/vW5lGdxwYUg6/?kp_id=$moviesId[$count]' width='640' height='480' frameborder='0' allowfullscreen></iframe>";
        $count++;
    }
?>

<?php
#Lesson 4.1
    while(have_posts()) {
        the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <hr>
    <?php }


?>


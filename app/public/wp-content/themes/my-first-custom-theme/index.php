<link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">


<h2><?php   bloginfo('name');?></h2>
<h3>Integrated functions that I was learned:</h3>
<div class="integrated_func">
    <h4>bloginfo('')</h4>
    <p>Arguments:</p>
    <ul>
        <li>name - show the blog`s name</li>
        <li>description - show the blog`s desckription</li>
        <li>temlate_url - show the full url where this theme placed</li>
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
        echo "<li>$namesExample[$count]</li>";
        $count++;
    }


?>




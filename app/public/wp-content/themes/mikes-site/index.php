<?php 
/* Template Name: HomePage */
 ?>

<?php

$backButton = "<button class='back-button' onclick='backToHome()'>Back</button>";
get_header();
?>
<section id="all-sections">
<section class="main">
<header>
<ul id="menu-list">
    <button onclick="toAbout()" id="about">About</button>
    <button onclick="toProf()" id="professional">Professional</button>
    <button onclick="toFun()" id="fun-stuff">Fun Stuff</button>
    <button onclick="toBlog()" id="blog">Blog</button>
    <button onclick="toContact()" id="contact">Contact</button>
</ul>
</header>
<?php
while(have_posts()){

    the_post(); ?>
    <h2><?php the_title(); ?></h2>

<?php }
echo $backButton
?>

</section>


<section class="about">
<?php 
echo $backButton
?>
</section>


<section class="professional">
<?php 
echo $backButton
?>
</section>


<section class="fun-stuff">
<?php 
echo $backButton
?>
</section>


<section class="blog">
<?php 
echo $backButton
?>
</section>


<section class="contact">
<?php 
echo $backButton
?>
</section>

</section>
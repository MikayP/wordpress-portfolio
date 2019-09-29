<?php 
/* Template Name: HomePage */
 ?>


<section class="main">
<?php get_header();

while(have_posts()){

    the_post(); ?>
    <h2><?php the_title(); ?></h2>

<?php }

?>
</section>

<section class="about">

</section>

<section class="projects">

</section>


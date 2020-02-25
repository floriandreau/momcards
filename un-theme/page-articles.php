
<?php
/*
Template Name: Liens Util
*/

get_header(); ?>
 <?php $loop = new WP_Query( array( 'post_type' => 'blog', 'post_per_page' => 5, 'nopaging' => true) ); ?>
 <div id="test">
 <div id="content-page">

     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
     
     <?php the_terms( $post->ID, 'titre', 'Titre : ' ); ?>

     <div class="art-page">
         
         <?php if (get_field('image_de_presentation') != "") {
             ?>
         <img class="img-page" src="<?php the_field('image_de_presentation');?>" alt="Image de présentation de l'article">
        <?php
     }
     ?>

<?php 
the_title( '<h2 class="title-page"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
<p class = prez-page><?php the_field('presentation'); ?> </p>
<p class="postmetadata-page">   <?php the_time('j F Y') ?> par <?php the_author() ?></p>
</div>

<?php endwhile ; ?>
<div id="stop"></div>
</div>
</div>
<?php get_footer(); ?>
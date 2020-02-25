<?php get_header(); ?>

<!-- Partie pour afficher le contenu -->

<!-- les derniers article -->
<?php $loop = new WP_Query( array( 'post_type' => 'blog', 'post_per_page' => 10, 'paged' => $paged) ); ?>
 <div class="content-home" id="home">

 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<?php the_terms( $post->ID, 'titre', 'Titre : ' ); ?>

<div class="art-home">

   <?php if (get_field('image_de_presentation') != "") {
        ?>
         <img class="img-home" src="<?php the_field('image_de_presentation');?>" alt="Image de présentation de l'article">
        <?php
     }
    ?>
    <div class="zone-text">

        <?php 
        the_title( '<h2 class="title-page"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
        <p class = prez-page><?php the_field('presentation'); ?> </p>
        <p class="postmetadata-page">   <?php the_time('j F Y') ?> par <?php the_author() ?></p>
    </div>
</div>

 <?php endwhile ; ?>
</div>

</body> 
</html>
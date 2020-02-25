<?php get_header(); ?>


<div id="content"> 
  <?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>"> 
        <h2>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h2>

        <p class="postmetadata">   <?php the_time('j F Y') ?> par <?php the_author() ?></p>

        <div class="post_content"> 
        <img class="img-prez" src="<?php the_field('image_de_presentation'); ?>" alt="Image de présentation de l'article">  
             
        <p class="corps">
            <?php the_field('texte'); ?> 
        </p>
        <?php if (get_field("video") != "") {
          ?>
            <div class="video">
            <?php the_field('video'); ?>
            </div>
          <?php
        } ?>
                <?php if (get_field("source") != "") {
          ?>
        <p class="source">
            Source(s) : <?php the_field('source'); ?> 
        </p>
        <?php
        } ?>
        </div> 
    </div> 
    <div class="comments-template"> <?php comments_template(); ?> </div>
    <?php endwhile; ?> 
    <?php else : ?> <p>Désolé, aucun article ne correspond à vos critères.</p>
    <?php endif; ?> 
</div>
	

<?php get_footer(); ?>

</div>
</body> 
</html>

   <div class="blog-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">

    <?php get_header(); ?>
      
      <div class="mdl-layout__content">
      <div class="blog-content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="post-layout">
<div class="post mdl-card mdl-shadow--6dp">
    <div class="post-image">
    <a href="<?php the_permalink(); ?>">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>    
    </a>    
    </div> 
    <div class="entry-content">   
    <div class="mdl-card__title">
        <h2 class="post-title mdl-card__title-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </div>
    <div class="post-actions mdl-card__actions">
      <span class="date"><i class="material-icons">today</i> <?php the_date(); ?></span>
    </div>
    <div class="post-summary mdl-card__supporting-text">
        <?php the_content(); ?>
    </div>
    <div class="post-share mdl-card__actions">

    </div>
    </div>
</div>
</div>

<?php endwhile; else: ?>
<h1>No se encontraron noticias</h1>
<?php endif; ?>

<div class="sidebar">
  <?php get_sidebar(); ?>
</div>

</div>

        <?php get_footer(); ?>
        </div>
        </div>
<?php wp_footer(); ?>
</body>
</html>
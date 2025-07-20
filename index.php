<?php get_header(); ?>

<main id="site-main">
  <section class="hero">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  </section>

  <section class="featured-tools">
    <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
          echo '<article>';
          the_title('<h2>', '</h2>');
          the_excerpt();
          echo '</article>';
        endwhile;
      endif;
    ?>
  </section>
</main>

<?php get_footer(); ?>
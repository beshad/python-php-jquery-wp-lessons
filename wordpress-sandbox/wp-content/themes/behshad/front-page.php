<?php get_header();?>
<main>
      <h1>This Page is Homepage so it uses the 'home-page.php' template.</h1>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="Logo">  
      <?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
        <h2>
          <a href="<?php the_permalink() ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <?php the_content(); ?>
      <?php endwhile; else: ?>
          <p>There no posts to show</p>
      <?php endif; ?>
</main>
<?php get_footer();?>
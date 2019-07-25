<?php /* Template Name: My Other Custom Page Template */ ?>

<?php get_header();?>
<main>
      <h1>This Page uses the 'My Other Custom Page Template'</h1>
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
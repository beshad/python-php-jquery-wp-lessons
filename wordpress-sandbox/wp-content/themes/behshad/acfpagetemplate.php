<?php /* Template Name: Advanced Custom Field Page Template */ ?>

<?php get_header();?>
<main>
      <h1>This Page uses the 'My Advanced Custom Field Page Template'</h1>
      <h2><?php the_field('header'); ?></h2>
      <p><?php the_field('body');?></p>
      <img src="<?php the_field('photo');?>" alt="">
</main>
<?php get_footer();?>


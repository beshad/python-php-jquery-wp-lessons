<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php bloginfo('language'); ?>"> <!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <!-- &raquo;     »     double right angle quote
            &laquo;     «      double left angle quote
            &lt;     <      single left arrow (left angle bracket)
            &gt;     >      single right arrow (right angle bracket)
            &bull;     •      bullet
            &#9829;     or     &hearts;      ♥      black heart
            &#9830;   or   &diams;     ♦    black diamond
            &#9827;   or   &clubs;   ♣    black clubs (shamrock)
            &#9824;   or   &spades;     ♠      black spade
            &#8734;    ∞      infinity symbol
            &mdash;    —      long dash -->
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
    <!-- The description is entered in the line designated as Tagline -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<?php get_template_part( 'partials/nav'); ?>
<?php do_action ( 'insert_text_here' ); ?>

</header>
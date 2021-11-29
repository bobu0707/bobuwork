<?php
/*
Template Name: page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
  <title><?php the_title(); ?> / <?php bloginfo(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header') ?>
  <!-- テンプレート確認用 -->
  <p>pageです</p>
  <h2><?php the_title(); ?></h2>

  <?php get_footer(); ?>
</body>

</html>

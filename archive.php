<?php
/*
Template Name: archive
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/archive.css">
  <title><?php the_title(); ?> / <?php bloginfo(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php get_template_part('includes/header') ?>
  <!-- テンプレート確認用 -->
  <p>archiveです</p>
  <?php get_footer(); ?>
</body>
</html>

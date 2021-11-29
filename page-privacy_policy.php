<?php
/*
Template Name: privacy_policy
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/privacy.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <main>
    <section class="privacy">
      <div class="inner">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
</body>

</html>

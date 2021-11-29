<?php
/*
Template Name: single
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <main>
    <!-- GoogleAdsense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9162417039602203" crossorigin="anonymous"></script>
    <!-- wide -->
    <ins class="adsbygoogle" style="display:block; text-align: center;" data-ad-client="ca-pub-9162417039602203" data-ad-slot="8092268581" data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <!-- GoogleAdsense -->
    <section class="content">
      <div class="inner">
        <h1><?php the_title(); ?></h1>
        <hr>
        <div class="thumbnail">
          <?php the_post_thumbnail(); ?>
        </div>
        <?php the_content(); ?>
      </div>
    </section>
    <!-- GoogleAdsense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9162417039602203" crossorigin="anonymous"></script>
    <!-- wide -->
    <ins class="adsbygoogle" style="display:block; text-align: center; margin-bottom: 52px;" data-ad-client="ca-pub-9162417039602203" data-ad-slot="8092268581" data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <!-- GoogleAdsense -->
  </main>

  <?php get_footer(); ?>
</body>

</html>

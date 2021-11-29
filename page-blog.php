<?php
/*
Template Name: blog
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <main>
    <section>
      <div class="inner">
        <div class="search"><?php get_search_form(); ?></div>
        <ul class="frameLink">
          <li class="frameLink__button" data-url="https://bobu.work/blog_list/">ALL</li>
          <li class="frameLink__button" data-url="https://bobu.work/category/html/">HTML</li>
          <li class="frameLink__button" data-url="https://bobu.work/category/css/">CSS</li>
          <li class="frameLink__button" data-url="https://bobu.work/category/jquery/">JQuery</li>
          <li class="frameLink__button" data-url="https://bobu.work/category/sass/">SASS</li>
          <li class="frameLink__button" data-url="https://bobu.work/category/xd/">XD</li>
        </ul>
      </div>
      <iframe src="https://bobu.work/blog_list" frameborder="0"></iframe>
    </section>
  </main>
  <?php get_footer(); ?>
</body>

</html>

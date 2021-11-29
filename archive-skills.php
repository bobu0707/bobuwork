<?php
/*
Template Name: skills
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skills.css">
  <title><?php the_title(); ?> / <?php bloginfo(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <div class="announce">
    <?php $page = get_post(get_the_ID());
    $slug = $page->post_name; ?>
    <p class="dogtag"><a href="<?php echo home_url('/'); ?>">TOP</a> > <?php the_title(); ?></p>
    <div class="arrow"></div>
  </div>
  <main>
    <div class="skill">
      <div class="inner">
        <h2>スキル一覧</h2>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="thumbnail">
            <?php if(has_post_thumbnail()){
              the_post_thumbnail('medium');
            } else { ?>
              <img src="<?php bloginfo('url') ?>/img/noimage.png" alt="noimage">
            <?php } ?>
          </div>
          <div class="outline">
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
          </div>
          <?php endwhile; ?>
        <?php else : ?>
          <p>投稿がみつかりません</p>
        <?php endif ?>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>
</body>

</html>

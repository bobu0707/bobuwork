<?php
//  Template Name: search
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/search.css">
  <title>検索結果 / <?php bloginfo(); ?></title>
  <?php wp_head(); ?>
</head>

<body>

</body <?php body_class(); ?>>
<?php get_template_part('includes/header'); ?>
<main>
  <section class="search">
    <div class="inner">
      <h3>検索結果</h3>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="flame">
            <a href="<?php the_permalink(); ?>">
              <div class="text">
                <h3><?php the_title(); ?></h3>
                <h4 class="discription"><?php echo get_the_excerpt(); ?></h4>
              </div>
              <div class="thumb">
                <?php if (has_post_thumbnail()){
                  the_post_thumbnail('small');
                }else{ ?>
                  <img src="<? echo get_template_directory_uri(); ?>/image/noimage.png">
                <?php } ?>
              </div>
          </a>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <p>一致する情報はみつかりませんでした。別のキーワードで検索してみてください。</p>
        <?php get_search_form(); ?>
      <?php endif; ?>
      <a href="<?php home_url('/'); ?>">TOPページへ戻る</a>
    </div>
  </section>
</main>
<?php get_footer(); ?>

</html>

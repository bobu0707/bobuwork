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
  <main>
    <section class="blog__list">
      <div class="inner">
        <h2>全カテゴリー</h2>
        <ul>
          <!-- blog記事 ループ -->
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <li class="card">
                <a href="<?php the_permalink(); ?>" target="_parent">
                  <div class="thumb">
                    <?php if (has_post_thumbnail()) {
                      the_post_thumbnail('medium');
                    } else { ?>
                      <img src="<? echo get_template_directory_uri(); ?>/image/noimage.png">
                    <?php } ?>
                  </div>
                  <div class="outline">
                    <h3><?php the_title(); ?></h3>
                    <h4 class="discription"><?php echo get_the_excerpt(); ?></h4>
                    <p><?php the_time(get_option('date_format')); ?></p>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          <?php else : ?>
            <p>記事がみつかりませんでした</p>
          <?php endif; ?>
        </ul>
        <?php wp_pagenavi(); ?>
      </div>
    </section>
  </main>
</body>
</html>

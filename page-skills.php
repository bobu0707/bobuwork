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
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <main>
    <section class="skill">
      <div class="inner">
        <h2>スキル一覧</h2>
        <ul>
          <?php $query = new WP_Query(array(
            'post_type' => 'skill',
            'order' => 'ASC',
            'orderby' => 'date',
          ));
          if ($query->have_posts()) {
            $num = 1;
            while ($query->have_posts()) {
              $query->the_post();
          ?>
              <div class="card modal__open" id="skill__list__<?php echo $num ?>" data-target="skill__text__<?php echo $num ?>">
                <div class="thumb">
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                  } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/image/noimage.png" alt="noimage">
                  <? } ?>
                  <h3><?php the_title(); ?><span class="skill__arrow">▼</span></h3>
                </div>
              </div>
              <div class="modal" id="skill__text__<?php echo $num ?>" style="display: none;">
                <div class="modal__bg modal__close"></div>
                <div class="modal__content">
                  <div class="thumb">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <h3><?php the_title(); ?></h3>
                  <?php the_content(); ?>
                <a class="modal__close close__text" href="">✕</a>
                </div>
              </div>
              <?php $num++; ?>
          <?php }
          } else {
            echo '随時更新中';
          }
          wp_reset_postdata(); ?>
        </ul>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
</body>

</html>

<?php
/*
Template Name: works
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/works.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <main>
    <section class="work">
      <div class="inner">
        <h2>制作物一覧</h2>
        <ul>
        <?php $query = new WP_Query(array(
          'post_type' => 'work',
          'order' => 'ASC',
          'orderby' => 'modified',
        ));
        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
        ?>
          <div class="card">
            <h3><?php the_title(); ?></h3>
            <div class="thumb">
              <?php if(has_post_thumbnail()){
                the_post_thumbnail('large');
              }else{ ?>
                <img src="<?php echo get_template_directory_uri(); ?>/image/noimage.png" alt="noimage">
              <? } ?>
            </div>
            <div class="comment">
              <?php the_content(); ?>
            </div>
            <div class="work__link">
              <?php $url = get_post_meta(get_the_ID(), 'URL', true); ?>
              <a href="<?php echo $url; ?> ">LINK</a>
            </div>
          </div>
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

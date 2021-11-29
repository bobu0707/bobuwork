<?php
/*
Template Name: request_price
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/request_price.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <main>
    <section class="introduction">
      <div class="inner">
        <h2 class="introduction__text"><span>製品</span>や<span>事業</span>のことを<br>
        <span>沢山</span>の人に<span class="orange">知ってもらいたい</span>
        </h2>
        <h2 class="introduction__text right">その<span class="orange">想い</span>を<span>ホームページ</span>にする<br>
        お手伝いをします！</h2>
        <h2 class="introduction__text"><span>シンプル</span>なのに<span>美しさ</span>と<br>
          <span class="orange">使いやすさ</span>を<span>論理的</span>に考えた<span>デザイン</span>
        </h2>
        <h2 class="introduction__text right"><span>スマホ</span>でも<span>押しやすいように<br>
            ボタン</span>は<span class="orange">右側</span>に配置</h2>
        <h2 class="introduction__text"><span>シンプル</span>を求めた<span>理由</span>は<br>
          <span>目的のページ</span>まで<span class="orange">迷わせない動線作り</span>
        </h2>
      </div>
    </section>
    <section class="flow">
      <div class="inner">
        <h2>ご依頼の流れ</h2>
        <ul>
          <?php $query = new WP_Query(array(
            'post_type' => 'flow',
            'order' => 'ASC',
            'orderby' => 'date',
          ));
          if ($query->have_posts()) {
            while ($query->have_posts()) {
              $query->the_post();
          ?>
              <div class="flame">
                <?php the_content(); ?>
              </div>
              <?php if (get_next_post()) : ?>
                <div class="arrow"></div>
              <? endif; ?>
          <?php }
          } else {
            echo '随時更新中';
          }
          wp_reset_postdata(); ?>
        </ul>
      </div>
    </section>
    <section class="price">
      <div class="inner">
        <h2>価格目安</h2>
        <p class="price__comment">実装難易度やページ枚数により価格が変動します。</p>
        <ul>
          <?php $query = new WP_Query(array(
            'post_type' => 'price',
            'order' => 'ASC',
            'orderby' => 'date',
          ));
          if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
              <div class="flame">
                <h3><?php the_title(); ?></h3>
                <div class="flame__comment"><?php the_content(); ?></div>
                <?php $price = get_post_meta(get_the_id(), '価格', true) ?>
                <p class="flame__price"><?php echo $price ?></p>
              </div>
            <?php endwhile; ?>
          <? else :
            echo '随時更新中';
          endif; ?>
        </ul>
      </div>
    </section>
    <section class="contact">
      <div class="inner">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h2>お問い合わせ</h2>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
</body>

</html>

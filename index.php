<?php
/*
Template Name: TOP
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
    <section class="profile">
      <div class="inner">
        <h2>bobuworks</h2>
        <p class="profile__text">ITコンサルティング、Web制作を行う「bobuworks」です。<br>
          ホームページやランディングページの制作、ITテクノロジーの活用法をアドバイスします。</p>
        <div class="container">
          <div class="profile__card card">
            <div class="profile__primary">
              <h3>bobu</h3>
              <div class="profile__image">
                <img src="<?php echo get_template_directory_uri(); ?>/image/profile.jpg" alt="profile_image">
              </div>
            </div>
            <div class="profile__secondary">
              <div>
                <p>大阪府東大阪市在住</p>
                <p>Webクリエイター</p>
                <p>設計、デザインから公開まで<br>一挙にお任せください。</p>
              </div>
            </div>
          </div>
          <div class="point">
            <div class="card">
              <h3 id="point__head__1" class="point__head" data-target="1"><span>ストーリー</span>を<span>伝える</span><span id="point__arrow__1" class="point__arrow"></span></h3>
              <p id="point__text__1" class="point__text" style="display: none;">数ある企業や製品の中で差別化をするにはどうすれば良いのか。<br>
                それは、歩んできた道のり、製品や技術が生まれた物語を発信する事です。<br>
                全力で「魅力を伝え、新しいチャンスを手に入れる」お手伝いをします。</p>
            </div>
            <div class="card">
              <h3 id="point__head__2" class="point__head" data-target="2"><span>見やすさ、触れやすさ</span>への<span>こだわり</span><span id="point__arrow__2" class="point__arrow"></span></h3>
              <p id="point__text__2" class="point__text" style="display: none;">Webページには目につきやすい場所、クリックしたくなる配置といったコツがあります。<br>
                合理的に目的を実現できるデザインをご提案します。</p>
            </div>
            <div class="card">
              <h3 id="point__head__3" class="point__head" data-target="3"><span>ネット</span>は<span>パソコン</span>よりも<span>スマホで見る時代</span>へ<span id="point__arrow__3" class="point__arrow"></span></h3>
              <p id="point__text__3" class="point__text" style="display: none;">調べものはスマートフォンでする。<br>
                つまり、Webページは多くの場合、スマートフォンで見られる時代になりました。<br>
                「bobuworks」で制作するWebページはスマートフォン向けページを主体にパソコンでも美しく表示されるページ作りを心掛けています。</p>
            </div>
            <div class="card">
              <h3 id="point__head__4" class="point__head" data-target="4"><span>新しい知識</span>を<span>日々インプット</span>しています。<span id="point__arrow__4" class="point__arrow"></span></h3>
              <p id="point__text__4" class="point__text" style="display: none;">毎日のように、より良い技術が開発、発見され増え続けています。<br>
                日々新しい知識を増やしブログに記録。<br>
                これからWeb制作を学ぼうとする方の道しるべとなれば幸いです。</p>
            </div>
    </section>
    </div>
    </div>
    </section>

    <section class="blog__list">
      <div class="inner">
        <h2>最近の投稿</h2>
        <ul>
          <!-- 固定ページで投稿表示 -->
          <?php
          global $post;
          $args = array('posts_per_page' => 6);
          $myposts = get_posts($args);
          foreach ($myposts as $post) {
            setup_postdata($post);
          ?>
            <li class="card">
              <a href="<?php the_permalink(); ?>">
                <div class="thumb">
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                  } else { ?>
                    <img src="<? echo get_template_directory_uri(); ?>/image/noimage.png">
                  <?php } ?>
                </div>
                <div class="outline">
                  <h3><?php the_title(); ?></h3>
                  <p class="discription"><?php echo get_the_excerpt(); ?></p>
                  <p><?php the_time(get_option('date_format')); ?></p>
                </div>
              </a>
            </li>
          <?php }
          wp_reset_postdata();
          ?>
        </ul>
        <div class="blog__link">
          <button>blog一覧へ<a href="<?php bloginfo('url') ?>/blog"></a></button>
        </div>
      </div>
    </section>

    <section class="twitter">
      <div class="inner">
        <h2>日々の積み上げtwitter</h2>
        <div class="card">
          <!-- twitter_timeline -->
          <a class="twitter-timeline" data-width="500" data-height="600" href="https://twitter.com/bobu_6326?ref_src=twsrc%5Etfw">Tweets by bobu_6326</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
</body>

</html>

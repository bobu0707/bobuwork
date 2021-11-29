 <?php
/*
Template Name: thanks
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/thanks.css">
  <title>お問い合わせありがとうございました。 / <?php bloginfo(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <main>
    <section class="thanks">
      <div class="inner">
        <h3>お問い合わせありがとうございました。</h3>
        <p>メールアドレスに確認の為に自動送信メールを送信しました。</p>
        <p>1~2日中にご回答させて頂きます。</p>
        <p>暫くお待ちいただけますようお願い致します。</p>
        <p><a href="<?php echo home_url('/'); ?>">TOPページへ戻る</a></p>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
</body>

</html>

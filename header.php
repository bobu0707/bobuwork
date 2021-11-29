  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
  <?php if (!(is_404() || is_search())) : ?>
    <?php if (is_home()) : ?>
      <title>blog / <?php bloginfo(); ?></title>
    <?php elseif (is_front_page()) : ?>
      <title><?php bloginfo(); ?></title>
    <?php else : ?>
      <title><?php the_title_attribute(); ?> / <?php bloginfo(); ?></title>
    <?php endif; ?>
  <?php endif; ?>
  <!-- <meta name="description" content="安価でホームページ制作、請け負います！WordPressを使った新規サイトから、既存サイトのWordPress化まで！
  「bobuworks」が想いをWebで発信します！"> -->
  <meta name="format-detection" content="telephone=no">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/image/bobuworks_150x150.png">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/image/boburowks_1200x630.svg">
  <!-- JQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-GLJF9FRN8S"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-GLJF9FRN8S');
  </script>

<footer>
  <div class="inner">
    <ul class="foot__nav">
      <li><a href="<?php echo home_url('/'); ?>">plofile</a></li>
      <li><a href="<?php bloginfo('url') ?>/blog">blog</a></li>
      <li><a href="<?php bloginfo('url') ?>/skills">skills</a></li>
      <li><a href="<?php bloginfo('url') ?>/works">works</a></li>
      <li><a href="<?php bloginfo('url') ?>/request_price">request & price</a></li>
      <li><a href="<?php bloginfo('url') ?>/contact">contact</a></li>
    </ul>
    <!-- <div class="SNS">
    <a href="https://twitter.com/bobu_6326" class="SNS__twitter">
      <img src="<?php echo get_template_directory_uri(); ?>/image/twitter_logo.png" alt="twitter_logo">Twitter</a>
    <a href="https://www.facebook.com/nobuaki.wada.75" class="SNS__facebook">
    <img src="<?php echo get_template_directory_uri(); ?>/image/facebook_logo.png" alt="facebook_logo">Facebook</a>
  </div> -->
  </div>
  <small><a href="<?php bloginfo('url') ?>/privacy_policy">プライバシーポリシーと免責事項</a></small>
  <small>bobuworks &copy; 2020-<?php echo date('Y'); ?></small>
  <?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/JQuery.js"></script>
</footer>

    <div id="loading">
      <div class="loader"></div>
    </div>
    <section class="header">
      <div class="header__image">
        <h1 id="title">bobuworks</h1>
        <a class="header__link" href="<?php bloginfo('url') ?>/contact">
          <div class="header__link__circle">
            <p>Webページ<br>制作依頼は<br>こちらから</p>
          </div>
        </a>
      </div>
      <div class="header__nav">
        <ul>
          <li>
            <a href="<?php echo home_url('/'); ?>">Profile</a>
          </li>
          <li>
            <a href="<?php bloginfo('url') ?>/blog">Blog</a>
          </li>
          <li>
            <a href="<?php bloginfo('url') ?>/skills">Skills</a>
          </li>
          <li>
            <a href="<?php bloginfo('url') ?>/works">Works</a>
          </li>
          <li>
            <a href="<?php bloginfo('url') ?>/request_price">Repuest & Price</a>
          </li>
          <li>
            <a href="<?php bloginfo('url') ?>/contact">Contact</a>
          </li>
        </ul>
      </div>
    </section>
    <div class="announce">
      <div class="arrow"></div>
      <?php
      if (!(is_404() || is_search())) :
        $page = get_post(get_the_ID());
        $slug = $page->post_name;
        if (is_home()) { ?>
          <p class="dogtag"><a href="<?php echo home_url('/'); ?>">TOP</a> > blog</p>
        <?php } elseif (is_front_page()) { ?>
          <p class="dogtag"><a href="<?php echo home_url('/'); ?>">TOP</a></p>
        <?php } elseif (is_single()) { ?>
          <p class="dogtag"><a href="<?php echo home_url('/'); ?>">TOP</a> > <a href="<?php bloginfo('url') ?>/blog">blog</a> > <?php the_title(); ?></p>
        <?php } else { ?>
          <p class="dogtag"><a href="<?php echo home_url('/'); ?>">TOP</a> > <?php the_title(); ?></p>
      <?php }
      endif; ?>
    </div>

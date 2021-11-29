 <?php
  /*
Template Name: 404
*/
  ?>

 <!DOCTYPE html>
 <html <?php language_attributes(); ?>>

 <head>
   <?php get_header(); ?>
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/404.css">
   <title>お探しのページはみつかりませんでした。 / <?php bloginfo(); ?></title>
   <?php wp_head(); ?>
 </head>

 <body <?php body_class(); ?>>
   <?php get_template_part('includes/header'); ?>
   <main>
     <section class="error">
       <div class="inner">
         <h3>404 Not Found (お探しのページはみつかりませんでした)</h3>
         <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
         <p class="error__url">URL: <span><?php echo get_pagenum_link(); ?></span></p>
         <p>現在表示する記事がありません。よろしければ、検索ボックスにお探しのコンテンツに該当するキーワードを入力してください。</p>
         <?php get_search_form(); ?>
         <p><a href="<?php echo home_url('/'); ?>">TOPページへ戻る</a></p>
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
             <?php the_content(); ?>
         <?php endwhile;
          endif; ?>
       </div>
     </section>
   </main>

   <?php get_footer(); ?>
 </body>

 </html>

<!DOCTYPE html>
<html lang="ja">
  <head>
  <?php get_header();?>
  </head>
  <body>
    <div id="global-container">
      <div id="container">
        <div class="mobile-menu__cover"></div>
        <div class="nav-trigger"></div>
        <header class="header">
        <?php get_template_part('include/header'); ?>
        </header>
        <div id="content">
        <?php get_template_part('include/hero'); ?>
          <div id="main-content">
           
            <?php get_template_part('include/side-left'); ?>
            <main>
            <?php get_template_part('include/breadcrumb'); ?> 

            <section class="single news-flex">
              <div class="single__inner news-flex__inner">
                <?php if(have_posts()): ?>
                  <?php while(have_posts()):the_post(); ?> 
                  <article id="post-<?php the_ID(); ?>" <?php post_class('single__content') ?> >
                    <div class="single__content-header">
                    <ul class="cat">
                       <?php categories_label(); ?>
                       </ul>
                    <time><?php the_time( get_option( 'date_format' ) ); ?></time>  
                    
                     <h2><?php the_title(); ?></h2>         
                    </div>
                    <div class="single__content-des">
                        <div class="single__content-text">
                      <?php the_content(); ?>
                       </div>
                    </div>
                  
                  </article >
                  <?php endwhile; ?>   
                <?php endif; ?> 
             
              
              </div>
              <?php get_template_part('include/news-categories'); ?>             
  <ul class="postLinks">
    
    <?php custom_category_paging_links(); ?>
</ul>
              </section>   
            <?php get_template_part('include/contact'); ?>

            </main>
            <?php get_template_part('include/side-right'); ?>
          
          </div>
        </div>
        <?php get_template_part('include/footer'); ?>
  
      </div>
      <?php get_template_part('include/mobile-menu');?>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>

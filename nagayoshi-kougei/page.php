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
           
            <main>
            <?php $page_slug = get_post_field('post_name', get_post());?>
            <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <div class="page-content">
              <div class="page-content__inner">
                  <?php get_template_part('include/breadcrumb'); ?> 
                  <?php if ($page_slug === 'about'): ?>
                    <?php get_template_part('page-include/page-about'); ?>
                   
                    <?php elseif ($page_slug === 'works'): ?>
                    <?php get_template_part('page-include/page-works'); ?>
                    <?php elseif ($page_slug === 'contact'): ?>
                    <?php get_template_part('page-include/page-contact'); ?>
                    <?php elseif ($page_slug === 'thanks'): ?>
                    <?php get_template_part('page-include/page-thanks'); ?>
                    <?php elseif ($page_slug === 'privacy'): ?>
                    <?php the_content(); ?>
                 
                      <?php endif; ?>
                     
                  
             
                </div>
          </div>
            <?php endwhile; ?>
            <?php endif; ?>
            
             
         
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

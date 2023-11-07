
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
            <?php get_template_part('include/breadcrumb'); ?> 
            <section class="works-lisx">
        
             <?php if(have_posts()): ?>   
              <div class="work-flex">
                <div class="works-list__inner work-flex__inner "> 
              <?php while(have_posts()):the_post(); ?>
              <?php get_template_part('include/notice-inside'); ?> 
                  <?php endwhile; ?>
                  <?php if(function_exists('wp_pagenavi')){wp_pagenavi();}  ?>
            </div>
              <?php get_template_part('include/product-taxlist'); ?>   
                  </div>
           <?php else: ?>
            <div class="works-list__notinfo">
            <div class="works-list__notinfo-inner">

                      <p>新しい情報はありません</p>
                     
                      <div class="works-list__not-btn">
                      <a class="btn slide-bg" href="<?= esc_url(home_url('/')); ?>">トップページへ戻る</a> 
                      </div>
                    </div>
                    </div>
                

            <?php endif; ?>

              </section>
        
              <?php get_template_part('include/contact'); ?>
            </main>
          
          </div>
        </div>
        <?php get_template_part('include/footer'); ?>
  
      </div>
      <?php get_template_part('include/mobile-menu');?>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>

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
               <section class="news">
                  <?php if(have_posts()): ?> 
                    <div class="news-flex">

                    <div class="news__inner news-flex__inner">               
                    <ul class="news__list appear right"> 
                    <?php while(have_posts()):the_post(); ?>
                    <?php get_template_part('include/news-inside'); ?> 
                <?php endwhile; ?>  
                </ul>      
                <?php if(function_exists('wp_pagenavi')){wp_pagenavi();}  ?>
                </div>
              <?php get_template_part('include/news-categories'); ?>  
             
              </div>  
                  <?php else: ?>
                    
                    <div class="news__notinfo">
                      <p>新しい情報はありません</p>
                      <div class="news__btn">
                      <a class="btn slide-bg" href="<?= esc_url(home_url('/')); ?>">トップページへ戻る</a> 
                      </div>
                    </div>
                    
                
                  <?php endif; ?>   
                    
                          

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

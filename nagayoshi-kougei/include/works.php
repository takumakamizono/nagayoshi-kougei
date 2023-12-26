<?php
                     $args=[
                       'post_type'=> 'product',
                       'posts_per_page' => 6,
 
                     ];
                    
     
                     $the_query = new WP_Query($args);
                    ?>
<section class="works">
                <div class="section-titles">
                  <h2 class="main-title">NEW WORKS</h2>
                  <span class="sub-title">最新の制作物をご紹介！</span>
                </div>
            
                      
                <div class="works__inner">
              
             <?php if($the_query->have_posts()): ?>  
              <ul class="works__list">
              <?php while($the_query->have_posts()):$the_query->the_post(); ?>
                  <?php get_template_part('include/works-inside'); ?>
                  <?php endwhile; ?>
                  </ul>
                <div class="works__btn appear up">
                <?php
    $product_link = get_post_type_archive_link('product');
    ?>
                    <a href="<?= esc_url($product_link); ?>"  class="btn slide-bg item">もっと見る</a>
                  </div>
           <?php else: ?>
            

<div class="works__notInfo">
                      <p>現在、制作実績は準備中です</p>
                    </div>

            <?php endif; ?>

                 
           </div>
             
              </section>   
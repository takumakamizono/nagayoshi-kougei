<section class="news" >
            <div class="section-titles-left">
              <div class="news__top-warp">
                  <h2 class="main-title-left">
                    NEWS <span>お知らせ情報</span>
                  </h2>
                  <div class="news__btn appear up">
                <?php
                      $news = get_term_by('slug','news','category');
                      $news_link = get_term_link($news,'category')
                      ?>
                    <a href="<?= esc_url($news_link); ?>"  class="btn slide-bg item">過去の記事を見る</a>
                  </div>
                  </div>
                </div>
                <div  class="news__inner">
                <?php
                     $args=[
                       'post_type'=> 'post',
                       'category_name' => 'news',
                       'posts_per_page' => 2,        
                     ];
                     $the_query = new WP_Query($args);
                    ?>
                  <?php if($the_query->have_posts()): ?>                    
                  <ul class="news__list appear right"> 
              <?php while($the_query->have_posts()):$the_query->the_post(); ?>
            <?php get_template_part('include/news-inside'); ?>
            <?php endwhile; ?>
                  </ul>
                 
                  <?php else: ?>
                    <div class="notice__notinfo">
                      <p>新しい情報はありません</p>
                     
                      <div class="notice__btn">
                      <a class="btn slide-bg" href="<?= esc_url(home_url('/')); ?>">トップページへ戻る</a> 
                      </div>
                    </div>
           <?php endif; ?>
             <?php wp_reset_postdata(); ?>                
                </div>
            
              </section>

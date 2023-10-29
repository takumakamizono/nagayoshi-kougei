<section class="works">
                <div class="section-titles">
                  <h2 class="main-title">
                    NEW WORKS
                    <span>最新の制作物をご紹介！</span>
                  </h2>
                </div>
                <?php
                     $args=[
                       'post_type'=> 'post',
                       'posts_per_page' => 6,
                       'cat' => [3],
                       
                     ];
                     $the_query = new WP_Query($args);
                    ?>
                      
                <div class="works__inner">
                  <ul class="works__list">
             <?php if($the_query->have_posts()): ?>   
              <?php while($the_query->have_posts()):$the_query->the_post(); ?>
                  <?php get_template_part('include/works-inside'); ?>
                  <?php endwhile; ?>
           <?php else: ?>
            

<li class="works__notInfo">
                      <p>現在、施工実績は準備中です</p>
                    </div>

            <?php endif; ?>

                 
           </li>
                </ul>
                <div class="works__btn appear up">
                  <?php
                      $news = get_term_by('slug','works','category');
                      $news_link = get_term_link($news,'category')
                      ?>
                    <a href="<?= esc_url($news_link); ?>"  class="btn slide-bg item">もっと見る</a>
                  </div>
              </section>   
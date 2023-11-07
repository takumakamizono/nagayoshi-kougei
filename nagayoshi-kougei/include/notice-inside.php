<div id="post-<?php the_ID(); ?>" class="works-list__block">
<a href="<?php the_permalink(); ?>">
    <div class="works-list__img">
            <?php the_post_thumbnail('full'); ?>    
            </div>
    
        <div class="works-list__contents">
      
          <p class="works-list__title"><?php the_title(); ?></p>
          <time><?php the_time( get_option( 'date_format' ) ); ?></time>  
                    <ul class="cat">
                       <?php custom_taxonomy_labels(); ?>
                       </ul>
                    <div class="works-list__desc">
                      <p><?php the_excerpt(); ?></p>
                    </div>
        </div> 
          </a>
</div>



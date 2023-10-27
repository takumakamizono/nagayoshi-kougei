<?php 
 $args =[
       'parent' => 3,
       'hide_empty' => false,
      

         ];
$cats = get_categories($args);

?>
             <div class="news-cate">  
                <p clss="sub-title">カテゴリー一覧</p>                    
                <ul class="news-cate__ul appear up">
                <?php foreach($cats as $cat ): ?>            
                   <?php
                  
                     $cat_id = $cat->cat_ID;                     
                     $cat_title = $cat->name;
                     $cat_slug = $cat->slug;
                
                     $cat_url = get_term_link($cat->term_id);
                     ?>   
                <li class="<?php if(is_category($cat_id)){ echo 'current'; } ?> item"><a class="btn btn-block" href="<?= esc_url($cat_url); ?>"> <span><?= esc_html($cat_title); ?></span><span><?= esc_html($cat_slug); ?></span></a></li>      
                    <?php endforeach; ?>             
                   </ul>               
              </div> 
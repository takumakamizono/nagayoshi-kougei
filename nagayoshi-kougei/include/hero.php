<?php if(is_home()): ?>
  <div class="hero">
    <div class="hero__inner"> 
    <div class="c-video">
    <div class="c-video__frame">
    <div id="js-youtube"></div>
    </div>
    </div>

 

  </div>
</div>
<?php elseif (is_post_type_archive('product')) : ?>
    <?php 
    $post_type_object = get_post_type_object(get_post_type());
    if ($post_type_object) {
    $post_type_name = $post_type_object->labels->menu_name;
    $post_type_slug = $post_type_object->rewrite['slug']; 

    // 月別アーカイブの場合、年と月を取得
    if (is_month()) {
        $archive_date = get_the_date('Y年n月', get_queried_object_id()); // 年と月を組み合わせて "何年何月" の形式で表示
        $post_type_slug = $archive_date;
        $post_type_name = $archive_date;
    }
  } else {
    $post_type_name = "カスタム投稿がありません"; // カスタム投稿が存在しない場合のデフォルトのタイトル
    $post_type_slug = "product"; // カスタム投稿が存在しない場合のデフォルトのスラッグ
}
    ?>
    <div class="hero-sub">    
        <div class="hero-sub__inner">
            <div class="hero-sub__titles">               
                <h2 class="hero-sub__maintitle"><?= esc_html($post_type_slug); ?></h2>
                <p class="hero-sub__subtitle"><?= esc_html($post_type_name); ?></p>           
            </div>
            <div class="hero-sub__img">         
                <img src="<?php the_field('product_img', 69); ?>" alt="制作実績ヘッダー画像">
            </div>     
        </div>
    </div>
      <?php elseif (is_tax()||is_singular('product')): ?>
        <?php 
$terms = get_the_terms(get_the_ID(), 'kind');
if ($terms && is_array($terms)) {
    $term = array_shift($terms); // 最初のタームを取得
    $term_name = $term->name;
    $term_slug = $term->slug;
} else {
    $term_name = '現在こちらの制作実績の投稿はありません'; // カテゴリがない場合のデフォルト値
    $term_slug = 'coming soon'; // カテゴリがない場合のデフォルト値
}
?>
      <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">
                         
              <h2 class="hero-sub__maintitle "><?=  esc_html($term_slug); ?></h2>
              <p class="hero-sub__subtitle"><?=  esc_html($term_name); ?></p>  
                   
              </div>
              <div class="hero-sub__img">         
                 <img src="<?php the_field('product_img',69);?>" alt="制作実績ヘッダー画像">
            </div>     
        </div>
      </div>


      <?php elseif (is_archive()) : // アーカイブページかどうかの判定
    $category = get_queried_object();
    
    $header_image = ''; // ヘッダー画像を初期化

    if (is_month()) : // 月別アーカイブページかどうかの判定
        $archive_date = get_the_date('Y年n月', get_queried_object_id()); // 年と月を組み合わせて "何年何月" の形式で表示
        $cat_slug = $archive_date;
        $cat_name = $archive_date;
        $header_image = get_field('news_img', 69); // 月別アーカイブページ用のヘッダー画像（必要に応じて追加）
    elseif (is_category() || in_category()) : // "news" カテゴリーかどうかの判定
      $cat_slug = $category->category_nicename;
    $cat_name = $category->cat_name;
        $header_image = get_field('news_img', 69); // "news" カテゴリー用のヘッダー画像
    endif;
    ?>
    <div class="hero-sub">
        <div class="hero-sub__inner">
            <div class="hero-sub__titles">
                <h2 class="hero-sub__maintitle"><?= esc_html($cat_slug); ?></h2>
                <p class="hero-sub__subtitle"><?= esc_html($cat_name); ?></p>
            </div>
            <div class="hero-sub__img">
                <?php if (!empty($header_image)) : ?>
                    <img src="<?= esc_url($header_image); ?>" alt="<?= esc_attr($cat_name); ?>のヘッダー画像">
                <?php endif; ?>
            </div>
        </div>
    </div>
      <?php elseif(is_single()):?>
    <?php 
    $category = get_the_category();
    $cat_slug = $category[0]->category_nicename;
    $cat_name = $category[0]->name;
?>
      <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">               
              <h2 class="hero-sub__maintitle "><?=  esc_html($cat_slug); ?></h2>
              <p class="hero-sub__subtitle"><?=  esc_html($cat_name); ?></p>           
              </div>
              <div class="hero-sub__img"> 
                <?php if(is_category('news') || in_category('news')):  ?>  
                 <img src="<?php the_field('news_img',69);?>" alt="お知らせのヘッダー画像">
             
             <?php endif; ?>
            </div>     
        </div>
      </div>
   
      <?php elseif(is_page()) : ?>
        <?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
        <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">
              <h2 class="hero-sub__maintitle "><?= strtoupper($post->post_name); ?></h2>
              <p class="hero-sub__subtitle"><?php the_title(); ?></p>
              </div>
              <div class="hero-sub__img"> 
              <?php if(has_post_thumbnail()): ?>        
              <?php the_post_thumbnail(); ?> 
               <?php endif; ?>
            </div>     
        </div>
      </div>
      <?php elseif(is_404()): ?>
        <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">
              <h2 class="hero-sub__maintitle ">404 NOT FOUND</h2>
              </div>
              <div class="hero-sub__img">  
                <?php if(get_field('404_img',69)): ?>      
              <img src="<?php the_field('404_img',69);?>" alt="404ページのヘッダー画像">
               <?php endif; ?>
            </div>     
        </div>
      </div>
        <?php endif; ?>
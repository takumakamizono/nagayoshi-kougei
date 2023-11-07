<?php
/*
Template Name: サイトマップ
Template Post Type: page
*/
?>

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
            <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <div class="page-content">
              <div class="page-content__inner">

              <?php get_template_part('include/breadcrumb'); ?> 
              <div class="page-content__blocks">
                  <div class="site-map">
                  <div class="site-map__box">   
<div class="site-map__top">               
  <p><a href="<?php echo home_url(); ?>">株式会社ナガヨシ工芸トップページ</a></p>
  </div> 
 
  
  <?php
$slugs = ['thanks', 'sitemap']; // 除外ページをスラッグで指定.

// 任意の順序で表示したい固定ページのIDを配列で指定.
$page_ids = [26,22, 24]; // ここに任意の固定ページのIDを追加.

// 除外ページのIDを取得
$exclude_ids = [];
foreach ($slugs as $page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        $exclude_ids[] = $page->ID;
    }
}

// 任意の順序で表示したい固定ページを取得
$args = [
    'post_type' => 'page',
    'post__in' => $page_ids,
    'orderby' => 'post__in', // ここで任意の順序を指定します
    'post_status' => 'publish',
    'posts_per_page' => -1,
];
$query = new WP_Query($args);

// 固定ページのループ
?>
<ul class="sm-list sm-list-page">
    <?php
    while ($query->have_posts()) {
        $query->the_post();
        // 除外ページは表示しないようにする
        if (in_array(get_the_ID(), $exclude_ids)) {
            continue;
        }
        ?>
        <li>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </li>
        <?php
    }
    wp_reset_postdata();
    ?>
</ul>
  </div> 
  
  <!-- <div class="site-map__box">   
  <?php
  $exclude_categories = [11,12,13,14]; // 除外したいカテゴリのIDを配列で指定
    $args=[
      
      'exclude'=> $exclude_categories,
      'orderby' => 'name',
      'order' => 'ASC'
    ];
    $categories=get_categories($args);
    foreach($categories as $category) {
      echo '<h2><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '"' . '>' . $category->name.'</a></h2>';
  ?>
    <ul class="sm-list sm-list-post">
      <?php
      global $post;
      $myposts = get_posts('numberposts=100&category=' . $category->term_id);
      foreach($myposts as $post) : setup_postdata($post);
      ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </ul>
  <?php }; ?>
  </div> -->
  <!--  -->
  <?php
    
    $categories = get_terms([
        'taxonomy' => 'category',
        'slug' => ['news', 'test'],
        'orderby' => 'include',
        'include' => array(5,1),
    ]);
    ?>
    <div class="site-map__box">
    <div class="site-map__top">               
  <p><a href="">投稿ページ</a></p>
  </div> 
    <ul class="sm-list sm-list-post">
        <?php foreach ($categories as $category) {
            $category_link = get_term_link($category, 'category');
            ?>
            <li>
                <a  href="<?= esc_url($category_link); ?>"><?= $category->name; ?>の投稿一覧</a>
            </li>
        <?php } ?>
    </ul>
    
    </div>
  <div class="site-map__box">
  <?php
  $args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,
    'orderby' => 'name',
    'order' => 'ASC'
  );
  $post_type = 'product';
  $post_type_object = get_post_type_object($post_type);
  
  $services = get_posts($args);
  if ($services) {
    if ($post_type_object) {
  $post_type_name = $post_type_object->labels->menu_name;
  $post_type_link = get_post_type_archive_link($post_type);
  echo '<h2><a href="' . esc_url($post_type_link) . '">'. $post_type_name .'</a></h2>';
} else {
  echo '<h2><a href=""></a>Custom Post Type</h2>';
}
echo '<ul class="sm-list sm-list-post">';
    foreach ($services as $post) {
      setup_postdata($post);
      echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
    }
    echo '</ul>';
    wp_reset_postdata();
  } else {
    echo '<p>No services found.</p>';
  }
  ?>
</div>
</div>
</div>
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

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
           
            <?php get_template_part('include/side-left'); ?>
            <main>
            <?php get_template_part('include/breadcrumb'); ?> 

            <section class="pastWork">
              <div class="pastWork__inner">
                <?php if(have_posts()): ?>
                  <?php while(have_posts()):the_post(); ?> 
                  <article id="post-<?php the_ID(); ?>" <?php post_class('pastWork__content') ?> >
                    <div class="pastWork__content-header">
                    <time><?php the_time( get_option( 'date_format' ) ); ?></time>  
                    
                     <h2><?php the_title(); ?></h2>         
                    </div>
                    <div class="pastWork__content-des">
                        <div class="pastWork__contentBox">
                        <div class="pastWork__block ">
                          <div class="pastWork-flex">
                          <div class="image-area-left">
                        <div class="pastWork-slider">
    <div class="slick-img">
      <?php if(get_field('slide01')): ?>
      <img
        src="<?php the_field('slide01');?>"
        alt="スライド画像"
      />
      <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide02')): ?>  
    <img
        src="<?php the_field('slide02');?>"
        alt="スライド画像"
      />
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide03')): ?>  
    <img
        src="<?php the_field('slide03');?>"
        alt="スライド画像"
      />
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide04')): ?>  
    <img
        src="<?php the_field('slide04');?>"
        alt="スライド画像"
      />
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide05')): ?>  
    <img
        src="<?php the_field('slide05');?>"
        alt="スライド画像"
      />
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide06')): ?>  
    <img
        src="<?php the_field('slide06');?>"
        alt="スライド画像"
      />
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide07')): ?>  
    <img
        src="<?php the_field('slide07');?>"
        alt="スライド画像"
      />
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide08')): ?>  
    <img
        src="<?php the_field('slide08');?>"
        alt="スライド画像"
      />
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide09')): ?>  
    <img
        src="<?php the_field('slide09');?>"
        alt="スライド画像"
      />
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="slick-img">
     <?php if(get_field('slide10')): ?>  
    <img
        src="<?php the_field('slide10');?>"
        alt="スライド画像"
      />
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
  </div>
  
  </div>
  <div class="image-area-right">
  <?php if(get_field('googlemap')): ?>  
    <?php the_field('googlemap'); ?>
    <?php else: ?>
      <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">

      <?php endif; ?>
  </div>
  </div>    
  <div class="thumbnail">
    <div class="thumbnail-img">
       <?php if(get_field('slide01')): ?>  
      <img
        src="<?php the_field('slide01');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide02')): ?>  
      <img
        src="<?php the_field('slide02');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide03')): ?>  
      <img
        src="<?php the_field('slide03');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide04')): ?>  
      <img
        src="<?php the_field('slide04');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide05')): ?>  
      <img
        src="<?php the_field('slide05');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide06')): ?>  
      <img
        src="<?php the_field('slide06');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide07')): ?>  
      <img
        src="<?php the_field('slide07');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide08')): ?>  
      <img
        src="<?php the_field('slide08');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide09')): ?>  
      <img
        src="<?php the_field('slide09');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
    <div class="thumbnail-img">
       <?php if(get_field('slide10')): ?>  
      <img
        src="<?php the_field('slide10');?>"
        alt="スライド画像"
      />
         <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/images/no-image.jpg" alt="noiamge画像">
      <?php endif; ?>
    </div>
  </div>
  <div class="youcube-content"><?php the_content();?></div>
                       </div>
                    </div>
                 
                    <?php get_template_part('include/detail-content'); ?>
                  </article >

                  <?php endwhile; ?>   
                <?php endif; ?> 
                <section class="works-list-location">
                <div class="section-titles">
            <h3 class="main-title">Related Portfolio</h3>
            <span class="sub-title">関連の制作実績</span>
        </div>
                  <div class="works-list-location__inner">
             
        <?php
global $post;
$terms = get_the_terms($post->ID, 'location');

if ($terms && !is_wp_error($terms)) {
$term = array_shift($terms);
$args = array(
  'numberposts' => 8,
  'post_type' => 'product',
  'taxonomy' => 'location',
  'term' => $term->slug,
  'orderby' => 'rand',
  'post__not_in' => array($post->ID)
);

$myPosts = get_posts($args);
if ($myPosts) :
  echo '<ul class="works-list-location__ul">';
  foreach ($myPosts as $post) :
      setup_postdata($post);
?>
       <?php get_template_part('include/works-inside'); ?>
      

  <?php endforeach; ?>
  <?php echo '</ul>'; ?>
<?php else : ?>
  <div>
  <p>関連の制作実績はありません。</p>
  </div>
<?php endif;
wp_reset_postdata();
} else {
  echo '<div class="works-list-location__desc">';
echo '<p>この制作案件に関連したその他の実績はありません。</p>';
echo '</div>';
}
?>
</div>
   </section>
                <div class="pastWork-postLinks">
                 <div class="pastWork-postLinks__link pastWork-postLinks__link-prev">
    <?php
    $prev_post = get_previous_post();
    if (!empty($prev_post)) : ?>
        <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
        <span class="pastWork-postLinks__link-img">   <?php echo get_the_post_thumbnail($prev_post->ID, 'thumbnail'); ?></span> 
           <span class="pastWork-postLinks__link-txt"> <?php echo esc_html($prev_post->post_title); ?></span> 
        </a>
    <?php endif; ?>
</div>

<div class="pastWork-postLinks__link pastWork-postLinks__link-next">
    <?php
    $next_post = get_next_post();
    if (!empty($next_post)) : ?>
        <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
        <span class="pastWork-postLinks__link-img"> <?php echo get_the_post_thumbnail($next_post->ID, 'thumbnail'); ?> </span>
        <span class="pastWork-postLinks__link-txt"> <?php echo esc_html($next_post->post_title); ?> </span>
        </a>
    <?php endif; ?>
</div>
</div>           
<div class="pastWork__btn">
<?php
$post_type = get_post_type(); // カスタム投稿タイプのネームを取得
$post_type_object = get_post_type_object($post_type);
$archive_link = get_post_type_archive_link($post_type); // カスタム投稿タイプのアーカイブページのリンクを取得
$menu_name = $post_type_object->labels->menu_name;
?>

<a class="btn slide-bg" href="<?= esc_url($archive_link); ?>"><?= esc_html($menu_name); ?>の一覧へ戻る</a> 
</div>
              
              </div>
           

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

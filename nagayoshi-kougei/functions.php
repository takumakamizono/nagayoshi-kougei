<?php
define("DIRE", get_template_directory_uri());
function add_async_defer_script($url) {
    if (strpos($url, '#async'))
    return str_replace('#async', '', $url)."' async='async";
    elseif (strpos($url, '#defer'))
      return str_replace('#defer', '', $url)."' defer='defer";
    else
      return $url;
  }
  add_filter('clean_url', 'add_async_defer_script', 11, 1);
   

  function enqueue_scripts() {
    $version = '1.0.0';
    $style_version = filemtime(get_stylesheet_directory() . '/style.css');
    $script_version = filemtime(get_stylesheet_directory() . '/scripts/main.min.js');
    wp_enqueue_style('css-reset',DIRE.'/styles/vendors/css-reset.css',array(), $version);
    wp_enqueue_style('fonts-googleapis','https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600;800|family=Roboto+Condensed:wght@300;400;700;900&display=swap', false);
    wp_enqueue_style('swiper-bundle.min.css',DIRE.'/styles/vendors/swiper-bundle.min.css',array(), $version);
    wp_enqueue_style('slick-theme.css','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css',false);
    wp_enqueue_style('slick.css','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',false);

    wp_enqueue_style('style.css',DIRE.'/style.css',array(),  $style_version);
    wp_enqueue_script('fontawesome','https://kit.fontawesome.com/2bf622374b.js', false);
    wp_enqueue_script('youtube.min.js', DIRE.  '/scripts/libs/youtube.min.js#defer', array(), $version);
    wp_enqueue_script('jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js', false);
    wp_enqueue_script('jquery.js', DIRE.  '/scripts/libs/jquery.min.js#defer', array(), $version);
    wp_enqueue_script('slick.js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',false);

    wp_enqueue_script('scroll-polyfill.js', DIRE.  '/scripts/vendors/scroll-polyfill.js#defer', array(), $version);
    wp_enqueue_script('gsap.min.js', DIRE.  '/scripts/vendors/gsap.min.js#defer', array(), $version);
    wp_enqueue_script('swiper-bundle.min.js', DIRE.  '/scripts/vendors/swiper-bundle.min.js#defer', array(), $version);
    wp_enqueue_script('hero-slider.js', DIRE.  '/scripts/libs/hero-slider.min.js#defer', array(), $version);
    wp_enqueue_script('scroll.js', DIRE.  '/scripts/libs/scroll.min.js#defer', array(), $version);
    wp_enqueue_script('text-animation.js', DIRE.  '/scripts/libs/text-animation.min.js#defer', array(), $version);
    wp_enqueue_script('mobile-menu.js', DIRE.  '/scripts/libs/mobile-menu.min.js#defer', array(), $version);
    wp_enqueue_script('main.js', DIRE.  '/scripts/main.min.js#defer', array(), $script_version);
  }
  add_action('wp_enqueue_scripts', 'enqueue_scripts');
  
  

add_theme_support('title-tag');
add_filter('document_title_separator','my_document_title_separator');
function my_document_title_separator($sepatator){
    $sepatator = '|';
    return $sepatator;
}
add_filter('document_title_parts','my_document_title_parts');
function my_document_title_parts($title){
 if(is_home()){
  unset($title['tagline']);
  $title['title']= '株式会社ナガヨシ巧芸';
 }
 return $title;
}



add_theme_support('menus');
add_theme_support('post-thumbnails');

//category-label
function categories_label() {
  $cats = get_the_category();
foreach($cats as $cat){
  if($cat->parent == 0){
        echo '<li>';
        echo esc_html($cat->name);
        echo '</li>';
    }
  }
}
/**
 * Contact Form 7 "フリガナ"のバリデーション追加
 */
function custom_wpcf7_validate_kana($result,$tag)
{
    $tag   = new WPCF7_Shortcode($tag);
    $name  = $tag->name;
    $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";
 
    //全角カタカナ又は平仮名の入力チェック
    if ($name === "your-kana") {
        if(!preg_match("/^[ア-ヶーぁ-ん]+$/u", $value)) {
            $result->invalidate( $tag,"全角カタカナ又は平仮名で入力してください。");
        }
    }
    return $result;
}
add_filter('wpcf7_validate_text', 'custom_wpcf7_validate_kana', 11, 2);
add_filter('wpcf7_validate_text*', 'custom_wpcf7_validate_kana', 11, 2);

//お問い合わせと送信完了（固定ページ）のスラッグをセットする
$contact = 'contact';
$thanks = 'thanks';

//お問い合わせフォームの送信後にサンクスページへ飛ばす
add_action( 'wp_footer', 'redirect_thanks_page' );
function redirect_thanks_page() {
  global $contact;
  global $thanks;
  ?>
  <?php if( is_page($contact)):?>
  <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
      location = '<?php echo home_url('/'.$thanks); ?>'; // 遷移先のURL
    }, false );
  </script>
<?php endif; ?>

<?php

}

function twpp_change_excerpt_length( $length ) {
  return 40; 
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

function twpp_change_excerpt_more( $more ) {
  $html = '<span>もっと見る</span>';
  return $html;
}

add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );



add_filter('use_block_editor_for_post',function($use_block_editor,$post){
  if($post->post_type==='page'){
      if(in_array($post->post_name,['top_slide','sub_topimg','sitemap'])){
          remove_post_type_support('page','editor');
          return false;
      }
  }
  return $use_block_editor;
},10,2);

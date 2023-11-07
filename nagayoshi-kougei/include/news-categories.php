<?php
	$cat_slug = 'news';
	$args = array(
		'category_name' => $cat_slug,
		'posts_per_page' => -1
	);
	//ここからはget_posts()でも
	$archive_query = new WP_Query( $args );
  $archive_list = []; // 初期化

	while ( $archive_query->have_posts() ) {
		$archive_query->the_post();
		//年月毎に記事情報を配列に格納
		$archive_list[ get_the_time( 'Y/n', $post->ID ) ][] = $post->post_title;
	}
	wp_reset_postdata();
	?>
  <?php if( $archive_list ) : ?>
<aside class="archive-list">
<div class="archive-list__block">
  <?php
   $categories = get_terms([
    'taxonomy' => 'category',
    'slug' => ['news'],
    'orderby' => 'include',
    'include' => [1],
]);
?>
<?php  if ($categories): ?>
    <p class="archive-list__tltle">カテゴリ</p>
	<ul class="archive-list__ul">
  <?php foreach ($categories as $category):?>
           <?php $category_link = get_term_link($category, 'category');
            ?>
            <li >
                <a  href="<?= esc_url($category_link); ?>"><?= $category->name; ?></a>
            </li>
            <?php endforeach; ?>
        <?php endif; ?>
	
	</ul>
  </div>
  
  <div class="archive-list__block">
    <p class="archive-list__tltle">アーカイブ</p>

    <select class="archive-list__dropdown" onchange="redirectToArchive()">
        <option>月別アーカイブ</option>
        <?php foreach( $archive_list as $year_month => $archive ) :
            $year_month_arr = explode( '/', $year_month );
            $archive_link = esc_url( home_url( $year_month.'/?cat_slug='.$cat_slug ) );
            $archive_count = count( $archive );
            $display_text = $year_month_arr[0].'年'.$year_month_arr[1].'月 ['.$archive_count.']';
        ?>
        <option value="<?php echo $archive_link ?>"><?php echo $display_text ?></option>
        <?php endforeach; ?>
    </select>
</div>
  </aside>
	<?php endif; ?>

<?php
$custom_post_type = 'product';
$custom_taxonomy = 'kind';

// カスタム投稿タイプのカテゴリーリストを取得
$categories = get_terms([
    'taxonomy' => $custom_taxonomy,
    'orderby' => 'include', // ソート順
    'parent' => 0,
]);



// カテゴリーリストを表示
if ($categories) : ?>
    <aside class="archive-list">
        <div class="archive-list__block">
            <p class="archive-list__tltle">カテゴリ</p>
            <ul class="archive-list__ul">
                <?php foreach ($categories as $category) {
                    $category_link = get_term_link($category, $custom_taxonomy);
                    ?>
                    <li>
                        <a href="<?= esc_url($category_link); ?>"><?= $category->name; ?></a>
                        <?php
                        // 現在のカテゴリーのサブカテゴリーを取得
                        $subcategories = get_terms([
                            'taxonomy' => $custom_taxonomy,
                            'orderby' => 'include', // ソート順
                            'parent' => $category->term_id, // 現在のカテゴリーのサブカテゴリーを取得
                        ]);

                        // サブカテゴリーが存在する場合は表示
                        if ($subcategories) : ?>
                            <ul class="archive-list__childーul">
                                <?php foreach ($subcategories as $subcategory) {
                                    $subcategory_link = get_term_link($subcategory, $custom_taxonomy);
                                    ?>
                                    <li>
                                        <a href="<?= esc_url($subcategory_link); ?>"><?= $subcategory->name; ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
  
<?php endif; ?>

<?php
// カスタム投稿タイプの月別アーカイブを取得
$archive_list = [];

$args = array(
    'post_type' => $custom_post_type,
    'posts_per_page' => -1,

);

$custom_query = new WP_Query($args);

while ($custom_query->have_posts()) {
    $custom_query->the_post();
    // 年月毎に記事情報を配列に格納
    $archive_list[get_the_time('Y/n', get_the_ID())][] = get_the_title();
}

wp_reset_postdata();
?>

<?php if ($archive_list) : ?>
   
        <div class="archive-list__block">
            <p class="archive-list__tltle">アーカイブ</p>
            <select class="archive-list__dropdown" onchange="redirectToArchive()">
                <option>月別アーカイブ</option>
                <?php foreach ($archive_list as $year_month => $archive) :
                    $year_month_arr = explode('/', $year_month);
                    $archive_link = esc_url( home_url( '/product/date/'.$year_month ) );
                    $archive_count = count($archive);
                    $display_text = $year_month_arr[0] . '年' . $year_month_arr[1] . '月 [' . $archive_count . ']';
                    ?>
                    <option value="<?php echo $archive_link ?>"><?php echo $display_text ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </aside>
<?php endif; ?>
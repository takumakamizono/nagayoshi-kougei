<div id="post-<?php the_ID(); ?>" class="works-list__block">
<a href="<?php the_permalink(); ?>">
<div class="works-list__head">
    <div class="works-list__head-left">
<h3 class="works-list__title"><?php the_title(); ?></h3>
<time><?php the_time( get_option( 'date_format' ) ); ?></time>  
                  
                       </div>
                       <div class="works-list__head-right">
                        <span class="" >詳細を見る </span>
                       </div>
                       </div>
                       <ul class="cat">
                       <?php custom_taxonomy_labels(); ?>
                       <?php custom_taxonomy_label_tag(); ?>

                       </ul>
                       <div class="works-list__block-inner">
    <div class="works-list__img">
            <?php the_post_thumbnail('full'); ?>    
            </div>
    
        <div class="works-list__contents">
                    <div class="works-list__desc">
                   <?php
$table = get_field( 'archive_detail_data' );
if ( ! empty ( $table ) ) {
    echo '<table class="property-archiveTable"">';
        if ( ! empty( $table['caption'] ) ) {
            echo '<caption>' . $table['caption'] . '</caption>';
        }
        if ( ! empty( $table['header'] ) ) {
            echo '<thead>';
                echo '<tr>';
                    foreach ( $table['header'] as $th ) {
                        echo '<th>';
                            echo $th['c'];
                        echo '</th>';
                    }
                echo '</tr>';
            echo '</thead>';
        }
        echo '<tbody>';
            foreach ( $table['body'] as $tr ) {
                echo '<tr>';
                    foreach ( $tr as $td ) {
                        echo '<td>';
                            echo $td['c'];
                        echo '</td>';
                    }
                echo '</tr>';
            }
        echo '</tbody>';
    echo '</table>';
}
?>

                    </div>
                    </div>
        </div> 
          </a>
</div>



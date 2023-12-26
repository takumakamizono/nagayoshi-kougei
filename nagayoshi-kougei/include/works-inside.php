<li id="post-<?php the_ID(); ?>"class="works__item">
<a href="<?php the_permalink(); ?>">
                    <div class="works__img">
                      <?php if(has_post_thumbnail()): ?>
                     <?php the_post_thumbnail('full'); ?>    
                     <?php else: ?>       
                      <img src="<?= get_template_directory_uri(); ?>/images/company.png" alt="noimage画像"> 
                      <?php endif; ?>
                    </div>
            
            <div class="works__contents">
            <ul class="cat">
                       <?php custom_taxonomy_labels(); ?>
                       <?php custom_taxonomy_label_tag(); ?>

                       </ul>
            <time><?php the_time( get_option( 'date_format' ) ); ?></time>  
                    <p class="works__title"><?php the_title(); ?></p>
                     <div class="works__desc">
                  
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
                    </a>
                     </li>

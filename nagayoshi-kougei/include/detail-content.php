<div class="pastWork__block bg-gray pt-md">
                        <div class="pastWork-flex">
                          <div class="contents-area-left">
                            <h3 class="main-title-left">DETAIL DATA</h3>
                            <ul class="cat">
                       <?php custom_taxonomy_labels(); ?>
                     
                       <?php custom_taxonomy_label_tag(); ?>
                       </ul>
                       
<?php
$table = get_field( 'detail_data' );
if ( ! empty ( $table ) ) {
    echo '<table class="detaildate-table">';
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
                          <div class="contents-area-right ">
                    
                          <?php get_template_part('include/product-taxlist'); ?>             
            
            <div class="contents-area-right__btn">
              
              <a href="<?= home_url('/contact/'); ?>"class="btn slide-bg" >
               お問い合わせはこちら
              </a>
          
                      </div>
            
                          </div>
                        </div>
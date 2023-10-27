<div class="footer appear up">
          <div class="footer__inner">
            <div class="footer__left">
          <div class="logo item">
             株式会社 川原建設
            </div> 
            <ul class="footer__address">
              <li>〒899-5115　鹿児島県霧島市隼人町東郷1010</li>
              <li>TEL : ０９９５−４２−０４１９</li>
              <li>FAX : ０９９５−４３−１８８０</li>
            </ul>    
          <nav class="footer__nav">
          <?php
                $args=[
                  'menu'=>'footer-nav',
                  'menu_class'=>'footer__ul appear left',
                  'container'=>false,
                
                ];
                wp_nav_menu($args);
                
                ?>     
           </nav>
            </div>
            <div class="footer__right">
            <div class="footer__img">
              <a href="https://www.city-kirishima.jp/"target="_blank" rel="noopener">
              <img src="<?= get_template_directory_uri(); ?>/images/kirishima-image.jpg" alt="霧島市のHP画像">
              </a>
            </div>
       
          </div> 
        </div>
        <div class="footer__copyright item">Copyright&copy; 株式会社 川原建設<span> All Rights Reserved.</span> </div>
        <div id="page_top"><a href="#"></a></div>
        </div>
        

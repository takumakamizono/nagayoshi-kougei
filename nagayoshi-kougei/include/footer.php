<div class="footer appear up">
          <div class="footer__inner">
            <div class="footer__left">
          <div class="logo item">
             <img src="<?= get_template_directory_uri(); ?>/images/logo.gif" alt="">
            </div> 
            <ul class="footer__address">
              <li>〒880-2214 宮崎県宮崎市高岡町高浜2238-4</li>
              <li>TEL : 0985-82-0368</li>
              <li>FAX : 0985-64-9666</li>
            </ul>    
        
            </div>
            <div class="footer__right">
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
        </div>
        <div class="footer__copyright item">Copyright&copy;2013 Nagayoshi-kougei,inc<span> All Rights Reserved.</span> </div>
        <div id="page_top"><a href="#"></a></div>
        </div>
        

 <!-- top(iphone) 用フッター -->
 <footer class="hs-footer d-flex">
     <!-- START footer -->
     <div id="footer-content" class="w-55">
         <div class="clearfix footer-add-wrap">

             <div id="footer-comtent-comp" class="clearfix hs-w80">
                 <div id="footer-comtent-comp-left" class="hs-footer-logo-container">
                     <a href="<?php bloginfo('url'); ?>/">
                         <!-- ホクシンシステムのロゴ -->
                         <div id="footer-logo"></div>
                     </a>
                 </div>
             </div>

             <div id="footer-comtent-comp" class="clearfix hs-w80">
                 <address>
                     株式会社 ホクシンシステム<br>〒060-0053<br>北海道札幌市中央区南3条東2丁目1番地</br>サンシャインビル3階 <br>TEL:011-522-9234
                 </address>
             </div>
             <!-- プライバシーマーク -->
             <div id="footer-privacymark" class="hs-footer-privacymark">
                 <a href="https://privacymark.jp/" target="_blank">
                     <div id="privacymark-logo"></div>
                 </a>
             </div>

         </div>
         <small class="hs-footer-small">&copy;HOKUSHIN Inc. All Right Reserved.</small>
     </div>
 </footer>
 <!-- END footer -->
</div>
 <!-- ロード画面 -->
 <div id="hs-load">
     <div class="mod_body">
         <div class="Opening">
             <ul style="margin-bottom: 0; bottom: 0;">
                 <li class="hs-load-container" style="background-color: #fff; height: 100vh;">
                     <span><img src="wp-content/uploads/2019/07/loading.svg" alt="" class="hs-load-img"></span>
                 </li>
                 <li><span><img class="Opening__img" src="wp-content/uploads/2019/07/loading.jpg" alt=""></span><img class="Opening__text" src="wp-content/uploads/2019/08/loading-txt.png" alt=""></li>
             </ul>
         </div>
     </div>
 </div>


 <script src="<?php bloginfo('stylesheet_directory'); ?>/jQuery_311.js"></script>

 <!-- 新規トップページ用JS -->
 <script src="<?php bloginfo('stylesheet_directory'); ?>/index2.js"></script>
 <!-- 共通JS -->
 <script src="<?php bloginfo('stylesheet_directory'); ?>/common.js"></script>

 <script src="<?php bloginfo('stylesheet_directory'); ?>/jQuery@3.js"></script>

 <script src="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>

 <?php wp_footer(); ?>
 </body>

 </html>
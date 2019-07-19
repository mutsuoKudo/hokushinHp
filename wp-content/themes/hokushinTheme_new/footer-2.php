 <!-- フッター -->
 <footer class="hs-footer d-flex">
     <div id="footer-content" class="w-55">
         <div class="clearfix footer-add-wrap">

             <div id="footer-comtent-comp" class="clearfix hs-w80">
                 <div id="footer-comtent-comp-left" class="hs-footer-logo-conteiner">
                     <a href="http://hokusys.jp">
                         <div id="footer-logo"></div>
                     </a>
                 </div>
             </div>

             <div id="footer-comtent-comp" class="clearfix hs-w80">
                 <address>
                     株式会社 ホクシンシステム<br>〒060-0053<br>北海道札幌市中央区南3条東2丁目1番地</br>サンシャインビル3階 <br>TEL:011-522-9234
                 </address>
             </div>

             <div id="footer-privacymark" class="hs-footer-privacymark">
                 <a href="https://privacymark.jp/" target="_blank">
                     <div id="privacymark-logo"></div>
                 </a>
             </div>

         </div>
         <small style="text-align: center;">&copy;HOKUSHIN Inc. All Right Reserved.</small>
     </div>
 </footer>

 </div>

 <!-- ロード画面 -->
 <div id="hs-load">
     <!-- デスクトップ用 -->
     <div class="hs-load-conteiner d-none d-lg-block">
         <div class="hs-dt-load-inner-conteiner">
             <!-- <img src="loading.svg" alt="" style="z-index:1000; width:100%; height:100%; position:absolute; top:0; left:0"> -->
             <img src="wp-content/uploads/2019/07/loading.svg" alt="">
         </div>
     </div>
     <!-- モバイルタブレット用 -->
     <div class="hs-load-conteiner d-block d-lg-none">
         <div class="hs-mbtb-load-inner-conteiner">
             <!-- <img src="loading.svg" alt="" style="z-index:1000; width:100%; height:100%; position:absolute; top:0; left:0"> -->
             <img src="wp-content/uploads/2019/07/loading.svg" alt="">
         </div>
     </div>
 </div>

 <!-- 新規トップページ用JS -->
 <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/index.js"></script>
 <!-- 共通JS -->
 <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/common.js"></script>

 <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script> -->
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/jQuery@3.js"></script>

 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script> -->
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js" ></script>

 <?php wp_footer(); ?>
 </body>

 </html>
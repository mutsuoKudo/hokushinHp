<!-- TOP（iphone）用 -->
<?php /* Template Name: TOP（iphone）用  */ ?>
<?php get_header(5); ?>


<!-- *勝手にpタグやbrタグが入らないようにする -->
<?php remove_filter('the_content', 'wpautop'); ?>
        <!-- top画像 -->
        <div style="width: 100%; height: 100vh;">
            <!-- デスクトプ画面用 -->
            <div class="hs-topimage-container">
                <div class="hs-topimage-left-tablecell" style="vertical-align: middle;">

                    <!-- 左の画像 -->
                    <div class="hs-topimage-inner-container hs-test-left-layout" style="top: 68% !important; z-index: 200 !important; left: 10% !important;">

                        <ul class="hs-topimage-ul">
                            <li class="hs-topimage-li">
                                <img src="http://hokushinsystem.local/wp-content/uploads/2019/08/1.png" alt="" class="hs-hide hs-left-topimage">
                            </li>
                        </ul>
                    </div>
                    <!-- 中央の画像 -->
                    <div class="hs-topimage-inner-container" style="width: 70% !important; left: 15% !important; top: 30% !important">
                        <div class="position-relative w-100">
                            <img src="http://hokushinsystem.local/wp-content/uploads/2019/08/topimage-iphone.svg" alt="">
                        </div>
                    </div>
                    <!-- 右の画像 -->
                    <div class="hs-topimage-inner-container hs-test-right-layout" style=" left: 64% !important; top: 65.5% !important; ">

                        <ul class="hs-topimage-ul">
                            <li class="hs-topimage-li">
                                <img src="http://hokushinsystem.local/wp-content/uploads/2019/08/4.png" alt="" class="hs-hide hs-right-topimage">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(3); ?>
<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>



	  </div>

    <div class="col-md-2 col-sm-2 sidebar">

<?php echo outlogin('theme/basic2'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
	
<div id="sidebar-menu">

<h2>컨텐츠</h2>

<ul class="list-unstyled">
  <li><a href="http://red2.net/gbd/bbs/board.php?bo_table=mod_tutorial">모드 강좌</a></li>
  <li><a href="http://red2.net/gbd/bbs/board.php?bo_table=lab">실험실</a></li>
  <li><a href="http://red2.net/gbd/bbs/board.php?bo_table=cnc_dic">C&amp;C 백과사전</a></li>
  <li><a href="http://red2.net/gbd/bbs/board.php?bo_table=red2_dic">레드넷 용어사전</a></li>
</ul>

</div>
	  
    </div>
 </div>
</div>



<!-- 하단 시작 { -->
<div class="container no-padding">
    <footer class="footer">
        <ul class="list-inline text-center">
		  <li><a href="http://red2net.cafe24.com/gbd/bbs/content.php?co_id=about_us">사이트 소개</a></li>
          <li><a href="http://red2net.cafe24.com/gbd/bbs/content.php?co_id=rules">회칙</a></li>
          <li><a href="http://red2net.cafe24.com/gbd/bbs/content.php?co_id=donation">후원하기</a></li>
        </ul>

        <p class="text-center">Copyright 2002-2017, Red2.net.</p>
    </footer>
</div>

</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<a href="<?php echo get_device_change_url(); ?>" id="device_change">모바일 버전으로 보기</a>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
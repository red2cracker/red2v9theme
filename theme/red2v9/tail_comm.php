<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<!-- 최신글 끝 -->

    </section>

    <aside class="col-md-3">
      <!-- col-md-3 사이드바 -->

<?php echo outlogin('theme/basic2'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
	  
<!--
<form class="outlogin">
  <div class="form-group">
    <label for="exampleInputId1" class="sr-only">아이디</label>
    <input type="text" class="form-control" id="exampleInputId1" placeholder="아이디">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="sr-only">비밀번호</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="비밀번호">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      자동 로그인
    </label>
  </div>

  <button type="submit" class="btn btn-primary btn-login">로그인</button>

  <ul class="outlogin-register">
    <li><a href="#">회원가입</a></li>
    <li><a href="#">아이디/비번찾기</a></li>
  </ul>
</form>

-->

      <nav class="nav-local d-print-none">
        <h2>커뮤니티</h2>

        <ul>
          <li><a href="http://red2.net/gnuboard5/bbs/board.php?bo_table=free">자유 게시판</a></li>
          <li><a href="http://red2.net/gnuboard5/bbs/board.php?bo_table=cnc">C&amp;C 게시판</a></li>
		  <li><a href="http://red2.net/gnuboard5/bbs/board.php?bo_table=qna">Q&amp;A 게시판</a></li>
		  <li><a href="http://red2.net/gnuboard5/bbs/board.php?bo_table=comic">팬픽</a></li>
		  <li><a href="http://red2.net/gnuboard5/bbs/board.php?bo_table=suggest">건의사항</a></li>
		  <li><a href="http://red2.net/comm2/link.html">링크</a></li>
        </ul>
      </nav>

	  

	  
	  
	  
	  
	  
	  
	  
    </aside>
  </div>
</div>

<!-- 구글 애드센스(광고) 하단 -->

<footer class="footer d-print-none">
  <ul class="footer-link">
    <li><a href="http://red2.net/other2/about_us.html">사이트 소개</a></li>
    <li><a href="http://red2.net/other2/rules.html">회칙</a></li>
    <li><a href="http://red2.net/other2/donation.html">후원하기</a></li>
  </ul>

  <p class="footer-copy">Copyright 2002-2018, Red2.net.</p>
</footer>

<!-- http://blog.naver.com/scabbard2/220945542684 -->



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
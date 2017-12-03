<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<!--
<h2>최신글</h2>

<p>테스트</p>
-->

        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        //echo latest('theme/basic2', test, 5, 25);
        ?>

		
		
<div class="row row-remove latest-row">
		
<?php echo latest('theme/basic2', test, 4, 25); ?>

<?php echo latest('theme/basic2', test2, 4, 25); ?>

</div>


<div class="row row-remove latest-row">
		
<?php echo latest('theme/basic2', test3, 4, 25); ?>

<!-- 최근게시물 -->
<?php //include_once(G5_BBS_PATH.'/new_main.php'); ?>

</div>

<!-- SNS 링크(목록대신 문단과 | 사용) -->
<p class="sns-link">
  <a href="https://twitter.com/red2cracker">트위터</a> | 
  <a href="https://www.facebook.com/red2network/">페이스북</a> | 
  <a href="http://blog.naver.com/scabbard2">블로그</a> | 
  <a href="http://www.youtube.com/red2cracker">유튜브</a> | 
  <a href="https://discord.gg/F5ZcCwC">디스코드</a>
</p>





		
<?php //echo latest('theme/basic2', strategy, 5, 25); ?>

<?php //echo latest('theme/basic2', replay, 5, 25); ?>





<?php // echo outlogin('theme/basicm'); ?>


<?php // echo outlogin('theme/basic2'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>

<!-- HTML 마크업과 스타일 시트가 같아서 깨지는듯 ->
<?php // echo outlogin('theme/basic3'); ?>


<!--
<div class="col-md-6 col-sm-6">테스트</div>
<div class="col-md-6 col-sm-6">테스트</div>
-->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
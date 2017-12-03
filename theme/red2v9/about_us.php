<?php
define('_ABOUT_US_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/about_us.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');


//$title_link = "링크";

//$g5_head_title = $title_link;
?>

<div class="other-page">

<h1>사이트 소개(About Us)</h1>




</div>


<?php
include_once(G5_THEME_PATH.'/tail_other.php');
?>
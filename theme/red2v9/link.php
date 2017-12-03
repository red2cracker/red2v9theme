<?php
define('_LINK_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/link.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');


//$title_link = "링크";

//$g5_head_title = $title_link;
?>

<div class="other-page">


<h1>링크(Links)</h1>

<p>사이트 > <a href="http://red2.net/gbd/bbs/board.php?bo_table=suggest">건의사항</a>에서 링크 신청을 받습니다.</p>

<h2>국내 사이트</h2>

<ul>
  <li><a href="http://red2.net/">Red2.net</a></li>
  <li><a href="http://cafe.naver.com/generalsgood24">CNFC - 네이버 카페</a></li>
  <li><a href="http://cafe.naver.com/creatingbay">Creating Bay - 네이버 카페</a></li><!--GmhanMod-->
  <li><a href="http://gall.dcinside.com/list.php?id=candc">C&amp;C 갤러리</a></li>
  <li><a href="https://www.youtube.com/channel/UClXi8d6eM5ZmW_2VZRnAzEQ">크래커의 유튜브 채널</a></li>
  <li><a href="https://www.youtube.com/channel/UCyXnkm3Y3gGNtmT1NzWyU7A">멀럭킹의 유튜브 채널</a></li>
  <li><a href="https://namu.wiki/w/Red2.net">나무위키</a></li>
  <li><a href="http://betagam.net/bbs/board.php?bo_table=cnc">베타겜</a></li>
</ul>

<h2>블로그</h2>

<ul>
  <li><a href="http://blog.naver.com/goddoom/">콤바트라v의 블로그</a></li>
  <li><a href="http://chocoslime.tistory.com/">Slime Factory</a></li>
  <li><a href="http://blog.naver.com/tutl57/">메탈슬러그가 대세다!</a></li>
  <li><a href="http://blog.naver.com/infobook2">infobook의 블로그</a></li>
  <li><a href="http://blog.naver.com/scabbard2">크래커의 비밀기지</a></li>
</ul>

<h2>외국 사이트</h2>

<ul>
  <li><a href="http://www.commandandconquer.com/">Command &amp; Conquer</a></li>
  <li><a href="http://www.cncnz.com/">CNCNZ</a></li>
  <li><a href="http://www.cncsaga.com/">C&amp;C Saga</a> (프랑스어)</li>
  <li><a href="http://www.united-forum.de/">United Forum</a> (독일어)</li>
  <li><a href="http://www.timeofwar.com/">Time Of War</a> (프랑스어)</li>

  <li><a href="http://www.gamereplays.org/">GameReplays.org</a></li>
  <li><a href="http://www.gamefront.com/games/cc-gold">GameFront</a></li>
  <li><a href="http://ra.nv17.com/">Red Alert: Archive</a></li>
  <li><a href="http://cnc.wikia.com/wiki/EVA_Database">C&amp;C Wiki: EVA Database</a></li>

  <li><a href="http://iran.cnc-comm.com/ra/">Portable RA</a></li>
  <li><a href="http://www.openra.net/">OpenRA</a></li>
  <li><a href="http://cncnet.org/">CnCNet</a></li>
</ul>

<h2>유통사</h2>

<ul>
  <li><a href="http://www.ea.com/">EA</a></li>
  <li><a href="https://www.origin.com/kor/ko-kr/store">Origin</a></li>
</ul>

<h2>모드</h2>

<ul>
  <li><a href="http://www.moddb.com/">Mod DB</a></li>
  <li><a href="http://ppmsite.com/">Project Perfect Mod</a></li>
  <li><a href="http://www.sleipnirstuff.com/">Sleipnir's Stuff</a></li>
  <li><a href="http://www.revora.net/">Revola</a></li>
  <li><a href="http://www.cnclabs.com/">C&amp;C Labs</a></li>
  <li><a href="http://www.derelictstudios.net/site/killasmods/">Killasmods</a></li>
  <li><a href="http://xhp.xwis.net/">XCC Home Page</a></li>
  <li><a href="http://www.wagnerma.de/">WagnerMa.de</a></li>
  <li><a href="http://www.falloutstudios.org/">Fallout Studios</a></li>

  <li><a href="http://sdi.cncguild.net/">SDI(Script Development Initiative)</a></li>
  <li><a href="http://www.renegade-x.com/">Regade X</a></li>
  <li><a href="http://bibber.eu/">Bibber's Website</a></li>
</ul>

<h2>아티스트</h2>

<ul>
  <li><a href="http://www.cybergooch.com/">Cybergooch</a></li>
  <li><a href="http://www.baxaart.com/">BaxaArt</a></li>
  <li><a href="http://www.fengzhudesign.com/">Feng Zhu Design</a></li>
</ul>

<h2>작곡가</h2>

<ul>
  <li><a href="http://www.frankklepacki.com/">Frank Klepacki</a></li>
  <li><a href="http://www.davidarkenstone.com/">David Arkenstone</a></li>
  <li><a href="http://www.billbrownmusic.com/">Bill Brown</a></li>
  <li><a href="http://en.wikipedia.org/wiki/Steve_Jablonsky">Steve Jablonsky - Wikipedia</a></li>
</ul>


</div>


<?php
include_once(G5_THEME_PATH.'/tail_site.php');
?>
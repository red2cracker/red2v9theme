<?php
$G5_PATH = '..';
$use_member = 0;
include_once('../common.php');
include_once(G5_PATH.'/head.sub.php');

echo <<<HEREDOC
<script>
    if (window.name != 'win_singo') {
        alert('올바른 방법으로 사용해 주십시오.');
        window.close();
    }
</script>
HEREDOC;
add_stylesheet('<link rel="stylesheet" href="singo_poppin.css">', 0);
?>

<!-- 스크랩 시작 { -->
<div id="memo_list" class="grz_memo">

	<form name="f_singo_popin" class="grz_frm" action="./singo_popin_update.php" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="co_id" value="<?php echo $co_id ?>">
		<h1 class="frm_hd">
			신고 이유와 할 말
		</h1>
		<div class="frm_ct">
			<div class="item">
				<p>
					<input type="radio" name="sg_reason" value="영리/홍보" id="r0" /><label for="r0">영리/홍보</label>
					<input type="radio" name="sg_reason" value="음란" id="r1" /><label for="r1">음란</label>
					<input type="radio" name="sg_reason" value="욕설" id="r2" /><label for="r2">욕설</label>
					<input type="radio" name="sg_reason" value="신상노출" id="r3" /><label for="r3">신상노출</label>
					<input type="radio" name="sg_reason" value="도배" id="r4" /><label for="r4">도배</label>
					<input type="radio" name="sg_reason" value="기타" id="r5" /><label for="r5">기타</label>
				</p>
			</div>
			<div class="item">
			<label class="rlbl"><textarea name="sg_memo" id="ct" required style="height:120px"><?php echo $content ?></textarea></label>
			</div>
		</div>
		<div class="frm_tl">
			<input type="submit" class="submit" accesskey="s" value="쪽지 보내기" />
		</div>
    </form>
</div>
<?
include_once(G5_PATH.'/tail.sub.php');
?>

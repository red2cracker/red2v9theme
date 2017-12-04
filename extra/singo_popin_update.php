<?php
$G5_PATH = '..';
include_once('../common.php');

if (!$member[mb_id]) // 보내는 사람
	$member[mb_id] = '#guest';

$memo_recv_mb_id = $config['cf_admin']; // 받는 사람

// 신고된 url
if ($co_id) {
	$sg_url = G5_BBS_URL.'/board.php?bo_table='.$bo_table.'&wr_id='.$wr_id.'#c_'.$co_id;;
} else {
	$sg_url = G5_BBS_URL.'/board.php?bo_table='.$bo_table.'&wr_id='.$wr_id;
}

// 제목 가져오기
$write = sql_fetch("select wr_subject from $write_table where wr_id = '$wr_id' and wr_parent = '$wr_id' ");
if($co_id) $write['wr_subject'] .= ' - 코멘트 #c_'.$co_id;

// 신고내용
$me_memo = "신고된 게시글 : $sg_url \n\n게시글의 신고이유 : {$sg_reason}\n\n매모 : ".$sg_memo;


$recv_mb_id   = $member_list['id'][$i];
$recv_mb_nick = get_text($member_list['nick'][$i]);

$tmp_row = sql_fetch(" select max(me_id) as max_me_id from {$g5['memo_table']} ");
$me_id = $tmp_row['max_me_id'] + 1;

$sql = " insert into {$g5['memo_table']} (me_id, me_recv_mb_id, me_send_mb_id, me_send_datetime, me_memo ) values ($me_id, '$memo_recv_mb_id', '{$member['mb_id']}', '".G5_TIME_YMDHIS."', '{$me_memo}' ) ";
sql_query($sql);

// 실시간 쪽지 알림 기능
$sql = " update {$g5['member_table']} set mb_memo_call = '{$member['mb_id']}' where mb_id = '$memo_recv_mb_id' ";
sql_query($sql);

echo <<<HEREDOC
<script>
    alert('신고가 완료되었습니다.');
        window.close();
</script>
<noscript>
<p>신고가 완료되었습니다..</p>
</noscript>
HEREDOC;
?>
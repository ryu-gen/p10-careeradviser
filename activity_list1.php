<?php
include('page_header.php');  //画面出力開始
require_once('db_inc.php');  //データベース接続
echo '<h2>助言登録</h2>';
$sql = "SELECT sid,sname,lbname, count(*) as num,max(adate) as recdate FROM vw_katudou " ;//検索条件を適用したSQL文を作成
if(isset($_SESSION['urole']) ){
	$uid = $_SESSION['uid'];

	if( $_SESSION['urole']==1){
		$sql .= " where uid='$uid'";
	}
	if( $_SESSION['urole']==2){
		$lbid = $uid . 'lab';
		$sql .= " where slab='$lbid'";
	}
}
$sql .= ' group by sid';
$rs = mysql_query($sql, $conn);
if (!$rs) {
    die ('エラー: ' . mysql_error());
}

$row = mysql_fetch_array($rs) ;

echo '<table class="table table-striped table-hover">';
echo '<tr><th>学籍番号</th><th>氏名</th><th>所属研究室</th><th>活動記録数</th><th>最後の活動日</th><th>助言</th></tr>';
while ($row) {
 echo '<tr>';
 echo '<td>' . $row['sid'] . '</td>';
 echo '<td>' . $row['sname']. '</td>';
 echo '<td>' . $row['lbname'] . '</td>';
 echo '<td align="center">' . $row['num'] . '</td>';
 echo '<td>' . $row['recdate'] . '</td>';
 echo '<td><a href="advice_add.php?sid='.$row['sid'].'">助言を書く</a></td>';
 echo '</tr>';

 $row = mysql_fetch_array($rs) ;

}
echo '</table>';

include('page_footer.php');  //画面出力終了
?>
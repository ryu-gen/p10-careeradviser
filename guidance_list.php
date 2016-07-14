<?php
include('page_header.php');  //画面出力開始
require_once('db_inc.php');  //データベース接続

echo "<h2>ガイダンス等一覧</h2>";

$sql = "SELECT gid, gname, gtime FROM tb_guidance" ;//検索条件を適用したSQL文を作成
$rs = mysql_query($sql, $conn);
if (!$rs) {
    die ('エラー: ' . mysql_error());
}

$row = mysql_fetch_array($rs) ;

echo '<table class="table table-striped table-hover">';
	echo '<tr><th>名称</th><th>開催日</th><th>操作</th></tr>';
	while ($row) {
		echo '<tr>';
		echo '<td>' . $row['gname'] . '</td>';
		echo '<td>' . $row['gtime']. '</td>';
		echo '<td><a href="guidabce_detail.php?gid='.$row['gid'] .'"/>詳細</td>';
		echo '</tr>';
		$row = mysql_fetch_array($rs) ;
	}
echo '</table>';

include('page_footer.php');  //画面出力終了
?>
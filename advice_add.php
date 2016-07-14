<?php
include('page_header.php');  //画面出力開始
require_once('db_inc.php');  //データベース接続
$sid = $_GET['sid'];
$sql = "SELECT * FROM vw_katudou WHERE sid='{$sid}' " ;//検索条件を適用したSQL文を作成
//echo $sql;
$rs = mysql_query($sql, $conn);
if (!$rs) {
    die ('エラー: ' . mysql_error());
}

$row = mysql_fetch_array($rs) ;
echo '<h2>助言登録</h2>';
echo '<table class="table table-striped table-hover">';
echo '<tr><th>学籍番号</th><th>氏名</th><th>所属研究室</th><th>日付</th><th>企業名</th><th width="300">活動内容</th></tr>';
while ($row) {
 echo '<tr>';
 echo '<td>' . $row['sid'] . '</td>';
 echo '<td>' . $row['sname']. '</td>';
 echo '<td>' . $row['lbname'] . '</td>';
 echo '<td>' . $row['adate'] . '</td>';
 echo '<td>' . $row['company'] . '</td>';
 echo '<td>' . $row['detail'] . '</td>';
 echo '</tr>';

 $row = mysql_fetch_array($rs) ;

}
echo '</table>';
$sql = "SELECT * FROM vw_jogen WHERE sid='{$sid}' " ;//検索条件を適用したSQL文を作成
//echo $sql;
$rs = mysql_query($sql, $conn);
if (!$rs) {
    die ('エラー: ' . mysql_error());
}

$row = mysql_fetch_array($rs) ;
echo '<h2>助言一覧</h2>';
echo '<table class="table table-striped table-hover">';
echo '<tr><th>学籍番号</th><th>氏名</th><th>所属研究室</th><th>日付</th><th>登録者名</th><th width="300">内容</th></tr>';
while ($row) {
 echo '<tr>';
 echo '<td>' . $row['sid'] . '</td>';
 echo '<td>' . $row['sname']. '</td>';
 echo '<td>' . $row['lbname'] . '</td>';
 echo '<td>' . $row['vdate'] . '</td>';
 echo '<td>' . $row['staff_name'] . '</td>';
 echo '<td>' . $row['content'] . '</td>';
 echo '</tr>';

 $row = mysql_fetch_array($rs) ;

}
echo '</table>';

echo '<form action="advice_save.php" method="post">';
echo '<input type="HIDDEN" name="sid" value="' .$sid .'"/>';
$act='insert';
$kst = $ket = date('Y-n-d H:i:s');
echo '<br>';
echo '<br>';
echo '<div class="input-group date">';
echo 	'<span class="input-group-addon">日付</span>';
echo 	'<input type="text" class="form-control" name="vdate" value=' . $kst . '/>';
echo 	'<span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>';
echo '</div>';

echo '<br>';
echo '<br>';
echo '<div class="input-group">';
echo 	'<span class="input-group-addon">助言</span>';
echo 	'<textarea class="form-control" name="content"　rows="5" cols="40"　placeholder=""></textarea>';
echo '</div>';

echo '<br>';
echo '<br>';
echo '<div class="input-group" role="group">';
echo 	'<input type="submit" value="登録" class="btn btn-default"/>';
echo 	'<input type="reset" value="キャンセル" class="btn btn-default"/>';
echo '</div>';

echo '<br>';
echo '<br>';

?>
</form>

<?php include('page_footer.php');  ?>
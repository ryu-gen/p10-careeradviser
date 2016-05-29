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
?>


<form action="advice_save.php" method="post">
<table>
<tr><td>日付</td><td>
  <input type="TEXT" name="vdate" value="<?php echo date('Y-m-d');?>"/>
  <input type="HIDDEN" name="sid" value="<?php echo $sid;?>"/>
</td></tr>
<tr><td>助言</td><td>
  <textarea name="content" rows="5" cols="40"></textarea>
</td></tr>
</table>


  <input type="submit" name="a" value="送信"/>
<input type="reset" value="取消"/>
</form>

<?php include('page_footer.php');  ?>
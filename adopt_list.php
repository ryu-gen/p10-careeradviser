<?php
include('page_header.php');  //画面出力開始
require_once('db_inc.php');  //データベース接続

echo "<h2>内定状況一覧</h2>";

$sql = "SELECT * FROM vw_katudou WHERE result=3 ORDER BY sid" ;//検索条件を適用したSQL文を作成

$rs = mysql_query($sql, $conn);
if (!$rs) {
    die ('エラー: ' . mysql_error());
}

$row = mysql_fetch_array($rs) ;

echo '<table class="table table-striped table-hover">';
echo '<tr><th>学籍番号</th><th>氏名</th><th>所属研究室</th><th>内定企業名</th><th>終了・継続</th></tr>';
while ($row) {
 echo '<tr>';
 echo '<td>' . $row['sid'] . '</td>';
 echo '<td>' . $row['sname']. '</td>';
 echo '<td>' . $row['lbname'] . '</td>';
 echo '<td>' . $row['company'] . '</td>';

  $i = $row['decision'];
 $dec = array(
 1=>"終了",
 2=>"継続",
 );

 echo '<td>' . $dec[$i] . '</td>';
 //echo '<td><a href="advice_add.php?sid='.$row['sid'].'">助言を書く</a></td>';
 echo '</tr>';

 $row = mysql_fetch_array($rs) ;

}
echo '</table>';

include('page_footer.php');  //画面出力終了
?>
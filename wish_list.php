<?php
include('page_header.php');  //画面出力開始
require_once('db_inc.php');  //データベース接続

echo "<h2>進路希望一覧</h2>";

$sql = "SELECT w.*, g.sname, g.lbname FROM tb_wish w, vw_gakusei g where w.sid=g.sid order by sid, careertype " ;//検索条件を適用したSQL文を作成

$rs = mysql_query($sql, $conn);
if (!$rs) {
    die ('エラー: ' . mysql_error());
}

$row = mysql_fetch_array($rs) ;

echo '<table class="table table-striped table-hover">';
echo '<tr><th>学籍番号</th><th>氏名</th><th>所属研究室</th><th>希望進路</th><th>進路詳細</th></tr>';
while ($row) {
 echo '<tr>';
 echo '<td>' . $row['sid'] . '</td>';
 echo '<td>' . $row['sname']. '</td>';
 echo '<td>' . $row['lbname'] . '</td>';

 $i = $row['careertype'];
 $careertype = array(
 1=>"就職",
 2=>"進学",
 3=>"その他"
 );

  echo '<td align="center">' . $careertype[$i] . '</td>';
 //echo '<td align="center">' . $row['careertype'] . '</td>';
 echo '<td>' . $row['detail'] . '</td>';
 echo '</tr>';

 $row = mysql_fetch_array($rs) ;

}
echo '</table>';
include('page_footer.php');  //画面出力終了
?>
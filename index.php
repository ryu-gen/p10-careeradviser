<?php 
include('page_header.php');  //画面出力開始
require_once('db_inc.php');  //データベース接続
if(!isset($_SESSION['uid'])){
	echo '<h2>ログインしていません</h2>';
  exit;
}
$urole=$_SESSION['urole'];
if($urole==1){
  echo '<h2 class="bg-danger">現状変更</h2>';
	$uid = $_SESSION['uid'];
	$sql = "SELECT * FROM tb_student WHERE uid='$uid'" ;
	$rs = mysql_query($sql, $conn);
	if (!$rs) {
    	die ('エラー: ' . mysql_error());
	}
	$row = mysql_fetch_array($rs) ;
	if($row) $status= $row['status'];
	$i = $row['status'];
   $status = array(
    1=>"現在、応募企業を選定中である。結果待ちはなし。",
    2=>"3月までは、数社受験していたが、現在活動休止中。",
    3=>"現在、両親と進路先について相談中。",
    4=>"活動終了。",
   );
?>
<form class="form-horizontal" action="status_save.php" method="post">
<div class="form-group has-success">
   <div class="col-sm-8"><select name="status" class="form-control">
<?php    
foreach ($status as $k=>$st){
  if ($k==$i) echo '<option value="'.$k.'" selected>' . $st;
  else echo '<option value="'.$k.'">' . $st;  
}
?>
    </select>
    </div>
    <div class="col-sm-4"><input type="submit" name="a" value="更新" class="btn btn-danger btn-block"/>
    </div>
</div>
</form>
<?php 
}
$sql = "SELECT * FROM vw_katudou " ;//検索条件を適用したSQL文を作成
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
$sql .= " ORDER BY sid";
$rs = mysql_query($sql, $conn);
if (!$rs)   die ('エラー: ' . mysql_error());
$row = mysql_fetch_array($rs) ;
echo '<h2>就職活動状況一覧</h2>';
echo '<table class="table table-striped table-hover">';
echo '<tr><th>学籍番号</th><th>氏名</th><th>所属研究室</th><th>日付</th><th>企業名</th><th width="300">活動内容</th><th>対応</th></tr>';
while ($row) {
 echo '<tr>';
 echo '<td>' . $row['sid'] . '</td>';
 echo '<td>' . $row['sname']. '</td>';
 echo '<td>' . $row['lbname'] . '</td>';
 echo '<td>' . $row['adate'] . '</td>';
 echo '<td>' . $row['company'] . '</td>';
 echo '<td>' . $row['detail'] . '</td>';
 //echo '<td>' . $row['decision'] . '</td>';
  $i = $row['decision'];
  $decision = array(
  1=>"決定",
  2=>"継続",
 );
 echo '<td>' . $decision[$i] . '</td>';
 echo '</tr>';
 $row = mysql_fetch_array($rs) ;
}
echo '</table>';
$sql = "SELECT * FROM vw_jogen " ;//検索条件を適用したSQL文を作成
if( $_SESSION['urole']==1){
	echo '<h2 class="bg-success">助言一覧</h2>';
	$sid = substr($uid,1);
	$sid = strtoupper($sid);
	$sql .= " where sid='$sid'";
	$rs = mysql_query($sql, $conn);
	if (!$rs) die ('エラー: ' . mysql_error());
	$row = mysql_fetch_array($rs) ;
	echo '<table class="table table-striped table-hover">';
	echo '<tr><th>日付</th><th width=500>助言内容</th><th>助言者</th></tr>';
	while ($row) {
	 echo '<tr>';
	 echo '<td>' . $row['vdate'] . '</td>';
	 echo '<td>' . $row['content']. '</td>';
	 echo '<td>' . $row['staff_name'] . '</td>';
	 echo '</tr>';
	 $row = mysql_fetch_array($rs) ;
	}
	echo '</table>';
}
include('page_footer.php');  //画面出力終了
?>
<?php
session_start();
if(isset($_SESSION['urole']) ){
	$uid = $_SESSION['uid'];

	if( $_SESSION['urole']!=1){
		include('page_header.php');  //画面出力開始
		echo "この機能を利用する権限がありません";
		include('page_footer.php');
		exit;
	}
}
$sid = substr($uid, 1, 7);
$sid = strtoupper($sid);
 $adate = $_POST['adate'] ;
 $company = $_POST['company'];
 $jobtype = $_POST['jobtype'] ;
 $first = $_POST['first'];
 $second = $_POST['second'];
 $third = $_POST['third'] ;
 $fourth = $_POST['fourth'] ;
 $plan = $_POST['plan'] ;
 $tip = $_POST['tip'];

 echo $adate . '<br>';
 echo $company . '<br>';
 echo $jobtype . '<br>';
 echo $first . '<br>';
 echo $second . '<br>';
 echo $third . '<br>';
 echo $fourth . '<br>';
 echo $plan . '<br>';
 echo $tip . '<br>';

 /*
 $sql = "INSERT INTO tb_activity(adate, sid, company, jobtype, detail, result, decision, next, memo) VALUES";
 $sql .= "('{$adate}','{$sid}','{$company}',{$jobtype},'{$detail}',{$result},{$decision},'{$next}','{$memo}')";
 include_once('db_inc.php'); //データベース接続のプログラムを読み込む
 $rs = mysql_query($sql, $conn);//SQL文をサーバーに送信し実行
 if (!$rs) {
   die('エラー: ' . mysql_error());
 }

*/
   $url = 'index.php';           //転送先のURL(TOPページ)
   header('Location:' . $url);   // 画面転送

?>
<?php
session_start();
include_once('db_inc.php'); //データベース接続のプログラムを読み込む

if(isset($_SESSION['urole'])){
	$uid = $_SESSION['uid'];

	if( $_SESSION['urole']!=1){
		include('page_header.php');  //画面出力開始
		echo "この機能を利用する権限がありません";
		include('page_footer.php');
		exit;
	}
}
$status = $_POST['status'];
 $sql = "UPDATE tb_student SET status={$status} WHERE uid='{$uid}'" ;
 $rs = mysql_query($sql, $conn);//SQL文をサーバーに送信し実行
 if (!$rs) {
   die('エラー: ' . mysql_error());
 }

$url = 'index.php';           //転送先のURL(TOPページ)
header('Location:' . $url);   // 画面転送

?>
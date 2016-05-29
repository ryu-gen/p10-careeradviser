<?php
session_start();
if(isset($_SESSION['urole']) ){
	$uid = $_SESSION['uid'];

	if( $_SESSION['urole']!=2 && $_SESSION['urole']!=3){
		include('page_header.php');  //画面出力開始
		echo "この機能を利用する権限がありません";
		include('page_footer.php');
		exit;
	}
}

	$sid = $_POST['sid'] ;
 	$vdate = $_POST['vdate'] ;
 	$content = $_POST['content'];
/*
 echo $sid . '<br>';
 echo $vdate . '<br>';
 echo $content . '<br>';
*/


 $sql = "INSERT INTO tb_advice VALUES";
 $sql .= "('{$sid}','{$vdate}','{$content}','{$uid}')";
 echo $sql;
 include_once('db_inc.php'); //データベース接続のプログラムを読み込む
 $rs = mysql_query($sql, $conn);//SQL文をサーバーに送信し実行
 if (!$rs) {
   die('エラー: ' . mysql_error());
 }


   $url = 'advice_add.php?sid='.$sid ;           //転送先のURL(TOPページ)
   header('Location:' . $url);   // 画面転送


?>
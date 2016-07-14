<?php
include('page_header.php');
require_once ('db_inc.php');  // データベース接続

if ( isset($_SESSION['urole']) and ($_SESSION['urole']==2 or $_SESSION['urole']==3 )) {
	//教職員としてログインしているなら
	//	$uname = $_GET['uid']; // 認証済みのパスワード
}else { // その以外は
	echo $_SESSION['urole'];
	die('エラー：この機能を利用する権限がありません');
}

$gname = $_POST['gname'];
$gtime = $_POST['gtime'];
$gplace = $_POST['gplace'];
$gdetail = $_POST['gdetail'];
$sql = "INSERT INTO tb_guidance VALUES('{NULL}', '{$gname}', '{$gtime}', '{$gplace}', '{$gdetail}')";
$rs = mysql_query($sql, $conn); //SQL文を実行
if (!$rs){
	echo "<h2>登録が失敗しました</h2>";
	echo mysql_error();
}else{
	echo "<h2>登録が成功しました</h2>";
}

include('page_footer.php');
?>
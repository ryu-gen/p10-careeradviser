<?php
include('page_header.php');  //画面出力開始
require_once('db_inc.php');  //データベース接続

if ( isset($_SESSION['urole']) and ($_SESSION['urole']==2 or $_SESSION['urole']==3 )) {
	//教職員としてログインしているなら
	//	$uname = $_GET['uid']; // 認証済みのパスワード
	echo '<h2>ガイダンス等登録</h2>';
}else { // その以外は
	echo $_SESSION['urole'];
	die('エラー：この機能を利用する権限がありません');
}

echo '<h2>求人情報登録</h2>';

$act='insert';
$kst = $ket = date('Y-n-d H:i:s');

echo '<form action="guidance_save.php" method="post">';
echo '<input type="hidden" name="act" value="'.  $act .'">'; //非表示送信

echo '<br>';
echo '<br>';
echo '<div class="input-group">';
echo 	'<span class="input-group-addon">会社名</span>';
echo 	'<input type="text" class="form-control" name="gname"　placeholder="">';
echo '</div>';

echo '<br>';
echo '<br>';
echo '<div class="input-group date">';
echo 	'<span class="input-group-addon">開催日</span>';
echo 	'<input type="text" class="form-control" name="gtime" placeholder=' . $kst . '/>';
echo 	'<span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>';
echo '</div>';

echo '<br>';
echo '<br>';
echo '<div class="input-group">';
echo 	'<span class="input-group-addon">場所</span>';
echo 	'<input type="text" class="form-control" name="gplace"　placeholder="">';
echo '</div>';

echo '<br>';
echo '<br>';
echo '<div class="input-group">';
echo 	'<span class="input-group-addon">詳細</span>';
echo 	'<textarea class="form-control" name="gdetail"　rows="5" cols="40"　placeholder=""></textarea>';
echo '</div>';

echo '<br>';
echo '<br>';
echo '<div class="input-group" role="group">';
echo   '<input type="submit" value="登録" class="btn btn-default"/>';
echo   '<input type="reset" value="キャンセル" class="btn btn-default"/>';
echo '</div>';

echo '</from>';
include('page_footer.php');  //画面出力終了
?>
<?php
include('page_header.php');  //画面出力開始
require_once('db_inc.php');  //データベース接続

$act='insert';

echo '<form action="user_add_confirmation.php" method="post">';
echo '<input type="hidden" name="act" value="'.  $act .'">'; //非表示送信

echo 'ユーザID:　　　　　';
echo '<input type="text" name="uid" value="" />';
echo '<br>';
echo '<br>';
echo 'ユーザ名:　　　　　';
echo '<input type="text" name="uname" value="" />';
echo '<br>';
echo '<br>';
echo 'メールアドレス:　 ';
echo '<input type="text" name="email" value="" />';
echo '<br>';
echo '<br>';
echo '電話番号:　　　　　';
echo '<input type="text" name="tel" value="" />';
echo '<br>';
echo '<br>';
echo 'パスワード:　　　　';
echo '<input type="password" name="upass" value=""/>';
echo '<br>';
echo '<br>';
echo '種別:　　　　　　　　';
echo '<input type="radio" name="urole" value=1 checked/>学生 ';
echo'<br>';
echo '<br>';
echo '<input type="submit" value="登録"/>';
echo '　　';
echo '<input type="reset" value="キャンセル">';

include('page_footer.php');  //画面出力終了
?>
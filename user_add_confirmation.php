<?php
include('page_header.php');
require_once ('db_inc.php');  // データベース接続

$st='@st.kyusan-u.ac.jp';
$email=$_POST['email'];//送信されたunameを受け取り、$unameに代入
if (!strstr($email, $st)) {
	echo "<p>含まれない";
}
if (strstr($email, $st)) {
	echo "<p>含まれる";
	if (mail($email, "TEST MAIL", "This is a test message.", "From: k13jk124@st.kyusan-u.ac.jp")) {
	  echo "メールが送信されました。";
	} else {
	  echo "メールの送信に失敗しました。";
	}
}

include('page_footer.php');
?>
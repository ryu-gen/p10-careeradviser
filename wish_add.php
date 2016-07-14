<?php include('page_header.php'); ?>

<h2>進路希望登録</h2>

<?php
/*
//変数の初期化
$act = 'insert';  //初回登録?（insert: 初回登録; update: 再登録）;
// ログイン中のユーザ($sid)の希望状況を検索する
$sql = "select * from tb_wish WHERE sid='{$sid}'";
$rs = mysql_query($sql, $conn);
if (!$rs) {
	die ('エラー: ' . mysql_error());
}
$row = mysql_fetch_array($rs) ;
if ($row) {
	$careertype = $row['careertype']; // 現在登録している希望進路
	$act = 'update';    // すでに登録したため「再登録」とする
}
*/
?>

<form action="wish_save.php" method="post">

<br>
<div class="btn-group" role="group">
	<span class="input-group-addon">希望進路</span>
		<span class="input-group-addon">
			<label class="radio-inline"><input type="radio" name="careertype" value="1" checked/>就職</label>
			<label class="radio-inline"><input type="radio" name="careertype" value="2"/>進学</label>
			<label class="radio-inline"><input type="radio" name="careertype" value="3"/>その他</label>
		</span>
</div>

<br>
<br>
<br>
<div class="input-group">
	<span class="input-group-addon">進路詳細</span>
	<textarea class="form-control" name="detail"　rows="5" cols="40"　placeholder=""></textarea>
</div>

<br>
<br>
<div class="input-group" role="group">
	<input type="submit" value="登録" class="btn btn-default"/>
	<input type="reset" value="キャンセル" class="btn btn-default"/>
</div>

</form>
<?php include('page_footer.php'); ?>
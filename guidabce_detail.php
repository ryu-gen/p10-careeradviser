<?php
	include('page_header.php');  //画面出力開始
	require_once('db_inc.php');  //データベース接続

	echo "<h2>ガイダンス等詳細</h2>";

	if (isset($_GET['gid'])){
		$gid = $_GET['gid'];
		$sql="SELECT * FROM tb_guidance WHERE gid=" . $gid;
		$rs = mysql_query($sql, $conn);
		if (!$rs) {
			die ('エラー: ' . mysql_error());
		}
		$row = mysql_fetch_array($rs) ;
	}else{
		die("表示するガイダンスIDが与えられていません");
		echo '<a href="user_list.php">戻る</a>';
	}

	echo '<table class="table table-striped table-hover">';
		echo '<div class="panel panel-default">';
			echo '<div class="panel-heading">'.$row['gname'].'</div>';
			echo '<div class="panel-body">'.$row['gplace'].'</div>';
			echo '<div class="panel-body">'.$row['gdetail'].'</div>';
			echo '<div class="panel-footer">'.$row['gtime'].'</div>';
		echo '</div>';
	echo '</table>';

	include('page_footer.php');  //画面出力終了
?>
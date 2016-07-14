<?php
$menu1 = array(  //学生メニュー
   '進路希望登録'  => 'wish_add.php'  ,
   '活動状況報告'  => 'activity_add.php' ,
   '内定報告'  => 'activity_add.php' ,
   'ガイダンス等一覧'  => 'guidance_list.php' ,
);
$menu2 = array(  //教員メニュー
   '学生一覧'  => 'student_list.php' ,
   '進路希望一覧'  => 'wish_list.php' ,
   '活動状況集計'  => 'activity_list.php' ,
   '内定状況一覧'  => 'adopt_list.php' ,
   '助言登録'=> 'activity_list1.php',
   'ガイダンス等登録'=>'guidance_add.php',
   '求人情報登録'=>'jobs_add.php',
);
$menu3 = array(  //管理者メニュー
   'アカウント登録'  => 'user_add1.php' ,
   'アカウント一覧'  => 'user_list.php' ,
   'アカウント削除'  => 'user_delete.php' ,
   'パスワード変更'  => 'user_passwd.php',
);
$menu0 = array(  //共通メニュー
   'ログアウト'  => 'logout.php',
);
echo '<ul class="nav navbar-nav">';
echo '<li><a href="index.php">ホーム</a></li>';
if(isset($_SESSION['urole']) ){
  $i = $_SESSION['urole'];
  $s = array(1=>'学生',2=>'教員',3=>'職員',9=>'管理者');
  echo '<li class="dropdown">';
  echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">' . $s[$i] . 'ニュー<span class="caret"></span></a>';
  echo '<ul class="dropdown-menu">';
	if( $_SESSION['urole']==1){
		//学生メニューの出力
		foreach($menu1 as $label=>$url){ //$menu1の要素を調べまわす
			echo '<li><a href="' .$url. '">' . $label . '</a></li>';
		}
	}
	if( $_SESSION['urole']==2 or $_SESSION['urole']==3){
		//教員,cscメニューの出力
    //echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">教員メニュー<span class="caret"></span></a>';
		foreach($menu2 as $label=>$url){ //$menu2の要素を調べまわす
			echo '<li><a href="' .$url. '">' . $label . '</a></li>';
		}
	}
	if( $_SESSION['urole']==9){
		//管理者メニューの出力
    //echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">管理者メニュー<span class="caret"></span></a>'; 
		foreach($menu3 as $label=>$url){ //$menu3の要素を調べまわす
			echo '<li><a href="' .$url. '">' . $label . '</a></li>';
		}
	}
  echo '</ul>';
  echo '</li>';
	//共通メニューの出力
	foreach($menu0 as $label=>$url){ //$menu0の要素を調べまわす
		echo '<li><a href="' .$url. '">' . $label . '</a></li>';
	}
}
echo '</ul>';
echo '<ul class="nav navbar-nav navbar-right">';
if(isset($_SESSION['urole']) ){
  echo '<li><a>' . $_SESSION['uname'] . 'さんがログイン中</a></li>';
}else{
  echo '<li><a href="user_add.php">学生アカウント登録</a></li>';
  echo '<li><a href="login.php">ログイン</a></li>';
}
echo '</ul>';
?>
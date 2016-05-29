<?php include('page_header.php');  ?>

<h2>就職活動・内定報告</h2>

<form action="activity_save.php" method="post">
<table>
<tr><td>日付</td><td>
  <input type="TEXT" name="adate" value="" placeholder="0000-00-00"/>
</td></tr>

<tr><td>応募企業名</td><td>
  <input type="TEXT" name="company" value="" size="50"/>
</td></tr>
<tr><td>職種</td><td>
  <input type="radio" name="jobtype" value="1" />営業職
  <input type="radio" name="jobtype" value="2"  checked/>技術職
  <input type="radio" name="jobtype" value="3" />総合職
  <input type="radio" name="jobtype" value="4" />その他
  </td></tr>
<tr><td>活動内容</td><td>
  <textarea name="detail" rows="5" cols="40"></textarea>
</td></tr>
<tr><td>選考結果</td><td>
  <input type="radio" name="result" value="1"  checked/>合格
  <input type="radio" name="result" value="2" />不合格
  <input type="radio" name="result" value="3" />内定 </td></tr>
<tr><td>内定後の対応</td><td>
  <input type="radio" name="decision" value="1" />決定
  <input type="radio" name="decision" value="2" />継続
</td></tr>
<tr><td>今後の予定</td><td>
  <input type="text" name="next" value="" size="50" placeholder="次は二次試験"/>
</td></tr>
<tr><td>コメント</td><td>
  <textarea name="memo" rows="4" cols="40" placeholder="感想又は後輩へのアドバイス"></textarea>
</td></tr>
</table>


  <input type="submit" name="a" value="送信"/>
<input type="reset" value="取消"/>
</form>

<?php include('page_footer.php');  ?>
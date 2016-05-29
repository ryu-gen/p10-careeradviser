<?php include('page_header.php');  ?>

<h2>内定報告</h2>
<form action="adopt_save.php" method="post">
<table class="table table-striped table-hover">
<tr><td>日付</td><td>
  <input type="TEXT" name="adate" value="" placeholder="0000-00-00"/>
</td></tr>

<tr><td>応募企業名</td><td>
  <input type="TEXT" name="company" value="" placeholder="KSU株式会社"" size="50"/>
</td></tr>
<tr><td>職種</td><td>
  <input type="radio" name="jobtype" value="1" />営業職
  <input type="radio" name="jobtype" value="2" />技術職
  <input type="radio" name="jobtype" value="3" />総合職
  <input type="radio" name="jobtype" value="4" />その他
  </td></tr>
<tr><td>一次選考</td><td>
  <textarea name="first" placeholder="〇〇/〇〇　学生３：試験管６での集団面接。"" rows="5" cols="40"></textarea>
</td></tr>
<tr><td>二次選考</td><td>
  <textarea name="second" rows="5" cols="40"></textarea>
</td></tr>
<tr><td>三次選考</td><td>
  <textarea name="third" rows="5" cols="40"></textarea>
</td></tr>
<tr><td>四次選考以降</td><td>
  <textarea name="fourth" rows="5" cols="40"></textarea>
</td></tr>
<tr><td>今後の予定</td><td>
  <input type="plan" name="next" value="" placeholder="期限までに内定承諾書を提出。"" size="50"/>
</td></tr>
<tr><td>後輩に一言</td><td>
  <textarea name="tip" placeholder="早めの対策が大切です。SPI対策が第一です。"" rows="4" cols="40"></textarea>
</td></tr>
</table>


<input type="submit" name="a" value="送信"/>
<input type="reset" value="取消"/>
</form>

<?php include('page_footer.php');  ?>
<?php include('page_header.php');  ?>

<h2>就職活動・内定報告</h2>

<form action="activity_save.php" method="post">
  <table>

    <?php
      $act='insert';
      $kst = $ket = date('Y-n-d H:i:s');
      echo '<br>';
      echo '<br>';
      echo '<div class="input-group date">';
        echo  '<span class="input-group-addon">日付</span>';
        echo  '<input type="text" class="form-control" name="adate" value=' . $kst . '/>';
        echo  '<span class="input-group-addon">';
          echo '<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>';
        echo '</span>';
      echo '</div>';

      echo '<br>';
      echo '<br>';
      echo '<div class="input-group">';
        echo '<span class="input-group-addon">応募企業名</span>';
        echo '<input type="text" class="form-control" name="company"　placeholder="">';
      echo '</div>';
    ?>

    <br>
    <br>
    <div class="btn-group" role="group">
      <span class="input-group-addon">職種</span>
        <span class="input-group-addon">
          <label class="radio-inline"><input type="radio" name="jobtype" value="1" checked/>営業職</label>
          <label class="radio-inline"><input type="radio" name="jobtype" value="2"/>技術職</label>
          <label class="radio-inline"><input type="radio" name="jobtype" value="3"/>総合職</label>
          <label class="radio-inline"><input type="radio" name="jobtype" value="4"/>その他</label>
        </span>
    </div>

    <br>
    <br>
    <br>
    <div class="input-group">
      <span class="input-group-addon">活動内容</span>
      <textarea class="form-control" name="detail"　rows="5" cols="40"　placeholder=""></textarea>
    </div>

    <br>
    <br>
    <div class="btn-group" role="group">
      <span class="input-group-addon">選考結果</span>
        <span class="input-group-addon">
          <label class="radio-inline"><input type="radio" name="result" value="1" checked/>合格</label>
          <label class="radio-inline"><input type="radio" name="result" value="2"/>不合格</label>
          <label class="radio-inline"><input type="radio" name="result" value="3"/>内定</label>
        </span>
    </div>

    <br>
    <br>
    <br>
    <div class="btn-group" role="group">
      <span class="input-group-addon">内定後の対応</span>
        <span class="input-group-addon">
          <label class="radio-inline"><input type="radio" name="decision" value="1" checked/>決定</label>
          <label class="radio-inline"><input type="radio" name="decision" value="2"/>継続</label>
        </span>
    </div>

    <br>
    <br>
    <br>
    <div class="input-group">
      <span class="input-group-addon">名称</span>
      <input type="text" class="form-control" name="next"　placeholder="次は二次試験">
    </div>

    <br>
    <br>
    <div class="input-group">
      <span class="input-group-addon">コメント</span>
      <textarea class="form-control" name="memo"　rows="5" cols="40"　placeholder="感想又は後輩へのアドバイス"></textarea>
    </div>

  </table>

  <br>
  <br>
  <div class="input-group" role="group">
    <input type="submit" value="登録" class="btn btn-default"/>
    <input type="reset" value="キャンセル" class="btn btn-default"/>
  </div>

</form>
<?php include('page_footer.php');  ?>
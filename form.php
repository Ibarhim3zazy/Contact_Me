<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/form.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <title>Sahem</title>
  </head>
  <body onload="success_msg()">
    <?php require("connection.php"); session_start();
      if (isset($_SESSION['name']) != true) {
        unset($_SESSION);
        session_destroy();
        header("location: index.php");
      }
      if(isset($_POST['user_id']) == true){
        $user_id = $_POST['user_id'];
        $result = $con->query("SELECT * FROM form WHERE id=$user_id;");
        if ($result != true) {
          echo "الرجاء التواصل معنا (ERORR)";
        }else {
          $row = $result-> fetch_assoc();
          $name = htmlentities($row['name']);
          $phone_num = htmlentities($row['phone_num']);
          $money = htmlentities($row['f_money']);
          $arrows = htmlentities($row['arrows']);
          $f_date = htmlentities($row['f_date']);
          $f_time = htmlentities($row['f_time']);
          $type = htmlentities($row['type']);
          $info = htmlentities($row['info']);
        }
      }
     ?>
    <form method="post" onsubmit="submit()" class='form'>
      <?php
        if(isset($_POST['user_id']) == true){
          echo '<input type="hidden" name="user_id" value="'.$user_id.'">';
        }
       ?>
      <p class='field required'>
        <label class='label required' for='name'>الاسم</label>
        <input class='text-input' id='name' name='name' required type='text' value='<?= $name ?? 'فاعل خير. ' ?>'>
      </p>
      <p class='field half required'>
        <label class='label' for='phone'>رقم التلفون</label>
        <input class='text-input' id='phone' name='phone' required type='phone' value='<?= $phone_num ?? '' ?>'>
      </p>
      <p class='field half required'>
        <label class='label' for='money'>المبلغ</label>
        <input class='text-input' id='money' name='money' onchange="count_arrows()" required type='text' value='<?= $money ?? '' ?>'>
      </p>
      <p class='field half required'>
        <label class='label' for='arrows'>عدد الاسهم</label>
        <input class='text-input' id='arrows' name='arrows' onchange="count_money()" required type='text' value='<?= $arrows ?? '' ?>'>
      </p>
      <p class='field half required'>
        <label class='label' for='date'>التاريخ</label>
        <input class='text-input' id='date' name='date' required type='date' value='<?= $f_date ?? '' ?>'>
      </p>
      <p class='field half required'>
        <label class='label' for='time'>التوقيت</label>
        <input class='text-input' id='time' name='time' required type='time' value='<?= $f_time ?? '' ?>'>
      </p>
      <p class='field'>
        <label class='label' for='about'>ملاحظات</label>
        <textarea class='textarea' cols='50' id='about' name='info' rows='4'><?= $info ?? '' ?></textarea>
      </p>
      <p class='field half required'>
        <label class='label' for='select'>اختر: </label>
        <select class='select' id='select' name='type'>
          <?php
          if (isset($type) && $type == 'اخري') {
            echo "<option value='فودافون كاش'>فودافون كاش</option>
                <option value='ميت غمر'>ميت غمر</option>
                <option value='منية النصر'>منية النصر</option>
                <option value='المنصوره'>المنصوره</option>
                <option selected value='اخري'>اخري</option>";
          }elseif (isset($type) && $type == 'ميت غمر (لم يتم التسليم)') {
              echo "<option value='فودافون كاش'>فودافون كاش</option>
                  <option value='ميت غمر'>ميت غمر</option>
                  <option value='منية النصر'>منية النصر</option>
                  <option value='المنصوره'>المنصوره</option>
                  <option value='اخري'>اخري</option>";
                }elseif (isset($type) && $type == 'منية النصر (لم يتم التسليم)') {
                  echo "<option value='فودافون كاش'>فودافون كاش</option>
                      <option value='ميت غمر'>ميت غمر</option>
                      <option value='منية النصر'>منية النصر</option>
                      <option value='المنصوره'>المنصوره</option>
                      <option value='اخري'>اخري</option>";
            }elseif (isset($type) && $type == 'المنصوره (لم يتم التسليم)') {
              echo "<option value='فودافون كاش'>فودافون كاش</option>
                  <option value='ميت غمر'>ميت غمر</option>
                  <option value='منية النصر'>منية النصر</option>
                  <option value='المنصوره'>المنصوره</option>
                  <option value='اخري'>اخري</option>";
        }else {
          echo "<option selected value='فودافون كاش'>فودافون كاش</option>
              <option value='ميت غمر'>ميت غمر</option>
              <option value='منية النصر'>منية النصر</option>
              <option value='المنصوره'>المنصوره</option>
              <option value='اخري'>اخري</option>";
        }
           ?>
        </select>
      </p>
      <p class='field half'>
        <input class='button' type='submit' value='ارسال'>
      </p>
    </form>
    <?php
      if (isset($_POST['name']) == true &&
          isset($_POST['phone']) == true &&
          isset($_POST['money']) == true &&
          isset($_POST['arrows']) == true &&
          isset($_POST['date']) == true &&
          isset($_POST['time']) == true &&
          isset($_POST['info']) == true &&
          isset($_POST['type']) == true &&
          isset($user_id) != true) {
            $name= htmlentities($_POST['name']);
            $phone= htmlentities($_POST['phone']);
            $money= htmlentities($_POST['money']);
            $arrows= htmlentities($_POST['arrows']);
            $date= htmlentities($_POST['date']);
            $time= htmlentities($_POST['time']);
            $info= htmlentities($_POST['info']);
            $type= htmlentities($_POST['type']);
            $money_branch = $money;
            $result = $con->query("INSERT INTO form VALUES(NULL, '$name', '$phone', '$money', '$arrows', '$date','$time','$info','$type');");
            $allmoney_result = $con->query("SELECT * FROM general;");
            if($allmoney_result == true){
              $row_allmoney = $allmoney_result-> fetch_assoc();
              $money += $row_allmoney['allmoney'];
            }
            $money_result = $con->query("UPDATE general SET allmoney='$money' WHERE active='true';");
          if (isset($type) && $type == 'ميت غمر') {
            $money_branch += $row_allmoney['money_mg'];
            $money_result_branch = $con->query("UPDATE general SET money_mg='$money_branch' WHERE active='true';");
            }elseif (isset($type) && $type == 'منية النصر') {
              $money_branch += $row_allmoney['money_mn'];
              $money_result_branch = $con->query("UPDATE general SET money_mn='$money_branch' WHERE active='true';");
            }elseif (isset($type) && $type == 'المنصوره') {
              $money_branch += $row_allmoney['money_man'];
              $money_result_branch = $con->query("UPDATE general SET money_man='$money_branch' WHERE active='true';");
        }
            if ($result == true && $money_result == true && $money_result_branch == true){
                echo '<div id="f_save">
                        <i class="fa fa-check"></i>
                        تم الحفظ بنجاح<br>
                      </div>';
              }else {
                echo '<div id="f_save">
                        <i class="fa fa-check"></i>
                        فشل الحفظ برجاء التواصل مع ادارة الموقع<br>
                      </div>';
              }
      }elseif(isset($_POST['name']) == true &&
          isset($_POST['phone']) == true &&
          isset($_POST['money']) == true &&
          isset($_POST['arrows']) == true &&
          isset($_POST['date']) == true &&
          isset($_POST['time']) == true &&
          isset($_POST['info']) == true &&
          isset($_POST['type']) == true &&
          isset($user_id) == true){
            $name= htmlentities($_POST['name']);
            $phone= htmlentities($_POST['phone']);
            $money= htmlentities($_POST['money']);
            $arrows= htmlentities($_POST['arrows']);
            $date= htmlentities($_POST['date']);
            $time= htmlentities($_POST['time']);
            $info= htmlentities($_POST['info']);
            $type= htmlentities($_POST['type']);
        $alert_result = $con->query("UPDATE form SET name='$name',phone_num='$phone_num',f_money='$money',arrows='$arrows',f_date='$date',f_time='$time',info='$info',type='$type' WHERE id='$user_id';");
        // money mg result
        $money_mg_result = $con->query("SELECT * FROM form WHERE type='ميت غمر';");
        if ($money_mg_result == true) {
          $money_branch = 0;
          while ($money_mg_row = $money_mg_result-> fetch_assoc()){
            $money_branch += $money_mg_row['f_money'];
          }
          $money_result_branch = $con->query("UPDATE general SET money_mg='$money_branch' WHERE active='true';");
        }
        // money mn result
        $money_mn_result = $con->query("SELECT * FROM form WHERE type='منية النصر';");
        if ($money_mn_result == true) {
          $money_branch = 0;
          while ($money_mn_row = $money_mn_result-> fetch_assoc()){
            $money_branch += $money_mn_row['f_money'];
          }
          $money_result_branch = $con->query("UPDATE general SET money_mn='$money_branch' WHERE active='true';");
        }
        // money man result
        $money_man_result = $con->query("SELECT * FROM form WHERE type='المنصوره';");
        if ($money_man_result == true) {
          $money_branch = 0;
          while ($money_man_row = $money_man_result-> fetch_assoc()){
            $money_branch += $money_man_row['f_money'];
          }
          $money_result_branch = $con->query("UPDATE general SET money_man='$money_branch' WHERE active='true';");
        }
        if ($alert_result == true && $money_mg_result == true &&
            $money_mn_result == true && $money_man_result == true) {
          echo '<div id="f_alert">
                  <i class="fa fa-check"></i>
                  تم التعديل بنجاح<br>
                  جاري تحويلك الي جدول التبرعات
                </div>';
        }else {
          echo '<div id="f_alert">
                  <i class="fa fa-check"></i>
                  فشل التعديل برجاء التواصل مع ادارة الموقع<br>
                </div>';
        }
      }
    ?>
    <script src="js/form.js"></script>
  </body>
</html>

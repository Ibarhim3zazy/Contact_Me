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
    <title>Contact Card</title>
  </head>
  <body>
    <?php require("connection.php"); session_start();
      if (isset($_SESSION['name']) != true) {
        unset($_SESSION);
        session_destroy();
        header("location: index.php");
      }
     ?>
    <form method="post" onsubmit="submit()" class='form'>
      <p class='field required'>
        <label class='label required' for='name'>الاسم</label>
        <input class='text-input' id='name' name='name' required type='text' value='فاعل خير. '>
      </p>
      <p class='field half required'>
        <label class='label' for='phone'>رقم التلفون</label>
        <input class='text-input' id='phone' name='phone' required type='phone'>
      </p>
      <p class='field half required'>
        <label class='label' for='money'>المبلغ</label>
        <input class='text-input' id='money' name='money' onchange="count_arrows()" required type='text'>
      </p>
      <p class='field half required'>
        <label class='label' for='arrows'>عدد الاسهم</label>
        <input class='text-input' id='arrows' name='arrows' onchange="count_money()" required type='text'>
      </p>
      <p class='field half required'>
        <label class='label' for='date'>التاريخ</label>
        <input class='text-input' id='date' name='date' required type='date'>
      </p>
      <p class='field half required'>
        <label class='label' for='time'>التوقيت</label>
        <input class='text-input' id='time' name='time' required type='time'>
      </p>
      <p class='field'>
        <label class='label' for='about'>ملاحظات</label>
        <textarea class='textarea' cols='50' id='about' name='info' rows='4'></textarea>
      </p>
      <p class='field half required'>
        <label class='label' for='select'>اختر: </label>
        <select class='select' id='select' name='type'>
          <option selected value='فودافون كاش'>فودافون كاش</option>
          <option value='ميت غمر (لم يتم التسليم)'>ميت غمر (لم يتم التسليم)</option>
          <option value='منية النصر (لم يتم التسليم)'>منية النصر (لم يتم التسليم)</option>
          <option value='المنصوره (لم يتم التسليم)'>المنصوره (لم يتم التسليم)</option>
          <option value='اخري'>اخري</option>
        </select>
      </p>
      <p class='field half'>
        <input class='button' type='submit' value='ارسال'>
      </p>
    </form>
    <?php
      if (isset($_POST['phone']) == true &&
          isset($_POST['money']) == true &&
          isset($_POST['arrows']) == true &&
          isset($_POST['date']) == true &&
          isset($_POST['time']) == true &&
          isset($_POST['info']) == true &&
          isset($_POST['type']) == true) {
            $name= htmlentities($_POST['name']);
            $phone= htmlentities($_POST['phone']);
            $money= htmlentities($_POST['money']);
            $arrows= htmlentities($_POST['arrows']);
            $date= htmlentities($_POST['date']);
            $time= htmlentities($_POST['time']);
            $info= htmlentities($_POST['info']);
            $type= htmlentities($_POST['type']);
            $result = $con->query("INSERT INTO form VALUES(NULL, '$name', '$phone', '$money', '$arrows', '$date','$time','$info','$type');");
            $allmoney_result = $con->query("SELECT * FROM general;");
            if($allmoney_result == true){
              $row_allmoney = $allmoney_result-> fetch_assoc();
              $money += $row_allmoney['allmoney'];
            }
            $money_result = $con->query("UPDATE general SET allmoney='$money' WHERE active='true';");
            if ($result == true && $money_result == true) {
              header("location: index.php");
            }else {
              echo 'faild';
            }
      }
    ?>
    <script src="js/form.js"></script>
  </body>
</html>

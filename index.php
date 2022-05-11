<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/all.min.css">
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <title>Contact Card</title>
  </head>
  <body onload="timer()">
    <?php require 'header.php';
      $date = date("Y-m-d");
      $result = $con->query("SELECT * FROM form WHERE f_date='$date';");
      $result_target = $con->query("SELECT * FROM general;");
      $num = $con->affected_rows;
      if($num != 0 && $result_target == true){
        $row_target = $result_target-> fetch_assoc();
        echo '<input type="hidden" id="date_timer" value="'.$row_target['date_timer'].'">';
      }
     ?>
    <div class="container">
      <div class="target_con">
        <h2>التقدم</h2>
        <div class="progress_con">
          <div class="progress_bar" id="progress_bar" style="width:50%">50%</div>
        </div>
        <div class="time_target">
          <h2>عد تنازلي</h2>
          <span id="countdown"></span>
        </div>
        <div class="money_target">
          <h2>اجمالي التبرعات</h2>
          <?php
            $allmoney = $con->query("SELECT * FROM general;");
            $num = $con->affected_rows;
            if($num != 0 && $allmoney == true){
              $row_target = $allmoney-> fetch_assoc();
              echo '<span id="allmoney">'.$row_target['allmoney'].'LE </span><span>من 30,000 الف</span>';
            }
           ?>
        </div>
        <h2>تبرعات اليوم</h2>
      </div>
      <div class="table_con">
        <table>
          <tr>
            <th>المسلسل</th>
            <th>المبلغ</th>
            <th>عدد الاسهم</th>
            <th>التاريخ</th>
            <th>التوقيت</th>
          </tr>
          <?php
          $index = 1;
            while ($row = $result-> fetch_assoc()){
              echo '<tr>
                      <td>'.$index++.'</td>
                      <td>'.$row['f_money'].'</td>
                      <td>'.$row['arrows'].'</td>
                      <td>'.$row['f_date'].'</td>
                      <td>'.$row['f_time'].'</td>
                    </tr>';
            }
           ?>
        </table>
      </div>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>

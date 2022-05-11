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
  <body>
    <?php require 'header.php';
      if (isset($_SESSION['name']) != true) {
        unset($_SESSION);
        session_destroy();
        header("location: index.php");
      }
      if(isset($_POST['user_id']) == true &&
        isset($_POST['money']) == true &&
        isset($_POST['type']) == true){
        $user_id = htmlentities($_POST['user_id']);
        $money = htmlentities($_POST['money']);
        $type = htmlentities($_POST['type']);
        $money_branch = $money;
        $result = $con->query("DELETE FROM form WHERE id=$user_id;");
        $allmoney_result = $con->query("SELECT * FROM general;");
        if($allmoney_result == true){
          $row_allmoney = $allmoney_result-> fetch_assoc();
          $money = $row_allmoney['allmoney'] - $money;
        }
        $money_result = $con->query("UPDATE general SET allmoney='$money' WHERE active='true';");
      if (isset($type) == true && $type == 'ميت غمر') {
        $money_branch = $row_allmoney['money_mg'] - $money_branch;
        $money_result_branch = $con->query("UPDATE general SET money_mg='$money_branch' WHERE active='true';");
        echo $money_branch;
        }elseif (isset($type) == true && $type == 'منية النصر') {
          $money_branch = $row_allmoney['money_mn'] - $money_branch;
          $money_result_branch = $con->query("UPDATE general SET money_mn='$money_branch' WHERE active='true';");
        }elseif (isset($type) == true && $type == 'المنصوره') {
          $money_branch = $row_allmoney['money_man'] - $money_branch;
          $money_result_branch = $con->query("UPDATE general SET money_man='$money_branch' WHERE active='true';");
    }
        if ($result != true && $money_result =! true && $money_result_branch =! true) {
          echo "الرجاء التواصل معنا (ERORR)";
        }
      }
     ?>
    <div class="container">
      <div class="table_con">
        <table>
          <tr>
            <th>المسلسل</th>
            <th>الاسم</th>
            <th>رقم الهاتف</th>
            <th>المبلغ</th>
            <th>عدد الاسهم</th>
            <th>التاريخ</th>
            <th>التوقيت</th>
            <th>نوع الاستلام</th>
            <th>اخري</th>
            <th>تعديل</th>
            <th>حذف</th>
          </tr>
          <?php
             $search_result = $con->query("SELECT * FROM form;");
             if ($search_result != true) {
               echo "الرجاء التواصل معنا (ERORR)";
             }
             $index = 1;
               while ($row = $search_result-> fetch_assoc()){
                 echo '<tr>
                         <td>'.$index++.'</td>
                         <td>'.$row['name'].'</td>
                         <td>'.$row['phone_num'].'</td>
                         <td>'.$row['f_money'].'</td>
                         <td>'.$row['arrows'].'</td>
                         <td>'.$row['f_date'].'</td>
                         <td>'.$row['f_time'].'</td>
                         <td>'.$row['type'].'</td>
                         <td>'.$row['info'].'</td>
                         <td>
                           <form action="form.php" method="post">
                             <input type="hidden" name="user_id" value="'.$row['id'].'">
                             <input type="submit" value="تعديل" id="f_alert">
                           </form>
                         </td>
                         <td>
                           <form action="all.php" method="post">
                             <input type="hidden" name="user_id" value="'.$row['id'].'">
                             <input type="hidden" name="money" value="'.$row['f_money'].'">
                             <input type="hidden" name="type" value="'.$row['type'].'">
                             <input type="submit" value="حذف" id="del">
                           </form>
                         </td>
                       </tr>';
               };
           ?>
        </table>
      </div>
    </div>
    <script src="js/alert.js"></script>
  </body>
</html>

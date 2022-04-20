<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/search.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <title>Contact Card</title>
  </head>
  <body>
    <?php require 'header.php'; ?>
    <div class="container">
      <div class="target_con search_con">
        <div class="select" tabindex="1">
          <?php
            if (isset($_SESSION['name']) == true) {
              $name = $_SESSION['name'];
              $r = $con->query("SELECT * FROM log WHERE name='$name' LIMIT 1;");
              $num = $con->affected_rows;
              if($num != 0 && $r == true){
                echo '
                <input class="selectopt" name="test" type="radio" id="opt1">
                <label for="opt1" class="option" onclick="text_fun(\'name_result\')">الاسم</label>
                <input class="selectopt" name="test" type="radio" id="opt2">
                <label for="opt2" class="option" onclick="text_fun(\'phone_result\')">رقم الهاتف</label>
                ';
              };
            };
          ?>
          <input class="selectopt" name="test" type="radio" id="opt3">
          <label for="opt3" class="option" onclick="text_fun('money_result')">المبلغ</label>
          <input class="selectopt" name="test" type="radio" id="opt4" checked>
          <label for="opt4" class="option" onclick="date_fun()">التاريخ</label>
          <input class="selectopt" name="test" type="radio" id="opt5">
          <label for="opt5" class="option" onclick="text_fun('type_result')">نوع التسليم</label>
          <input class="selectopt" name="test" type="radio" id="opt6">
          <label for="opt6" class="option" onclick="text_fun('info_result')">اخري</label>
      </div>

        <form method="get" id="search_form" role="search">
            <input type="date" name="search">
            <input type="hidden" name="type" value="date_result">
            <button type="submit">اذهب</button>
        </form>
        <h2 style="margin-top: 80px">النتائج</h2>
      </div>
      <div class="table_con">
        <table>
          <tr>
            <th>المسلسل</th>
            <th>المبلغ</th>
            <th>عدد الاسهم</th>
            <th>التاريخ</th>
            <th>التوقيت</th>
            <th>نوع الاستلام</th>
            <th>اخري</th>
          </tr>
          <?php
          if(isset($_GET['search']) == true && isset($_GET['type']) == true)
          {
            $search = $_GET['search'];
            $type = $_GET['type'];
            if ($search != "" && $type == "name_result") {
              $type = 'name';
            }elseif ($search != "" && $type == "phone_result")
            {
              $type = 'phone_num';
            }elseif ($search != "" && $type == "money_result") {
              $type = 'f_money';
            }elseif ($search != "" && $type == "date_result") {
              $type = 'f_date';
            }elseif ($search != "" && $type == "type_result") {
              $type = 'type';
            }elseif ($search != "" && $type == "info_result") {
              $type = 'info';
            }else {
              header('location: search.php');
            }

             $search_result = $con->query("SELECT * FROM form WHERE $type LIKE '%$search%'");
             if ($search_result != true) {
               echo "الرجاء التواصل معنا (ERORR)";
             }
             $index = 1;
               while ($row = $search_result-> fetch_assoc()){
                 echo '<tr>
                         <td>'.$index++.'</td>
                         <td>'.$row['f_money'].'</td>
                         <td>'.$row['arrows'].'</td>
                         <td>'.$row['f_date'].'</td>
                         <td>'.$row['f_time'].'</td>
                         <td>'.$row['type'].'</td>
                         <td>'.$row['info'].'</td>
                       </tr>';
               };
          };
           ?>
        </table>
      </div>
    </div>
    <script src="js/search.js"></script>
  </body>
</html>

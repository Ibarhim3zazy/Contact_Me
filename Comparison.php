<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/comparison.css">
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <title>Contact Card</title>
  </head>
  <body onload="timer()">
    <?php require 'header.php';
      $result = $con->query("SELECT * FROM general WHERE active ='true';");
      $num = $con->affected_rows;
      if($num != 0 && $result == true){
        $row = $result-> fetch_assoc();
        $winner = array("mg" => $row['money_mg'],  "mn" => $row['money_mn'], "man" => $row['money_man']);
        sort($winner);
        $branch_1 = "فرع المنصوره";
        $money_1 = $winner[2];
        $money_p_1 = $money_1 / 100 ;
        $branch_2 = "فرع ميت غمر";
        $money_2 = $winner[1];
        $money_p_2 = $money_2 / 100 ;
        $branch_3 = "فرع منية النصر";
        $money_3 = $winner[0];
        $money_p_3 = $money_3 / 100 ;
        print_r($winner);
      }
     ?>
    <div class="container">
      <div class="pricingTable">
        <h2 class="pricingTable-title">وَفِي ذَٰلِكَ فَلْيَتَنَافَسِ الْمُتَنَافِسُونَ</h2>
        <h3 class="pricingTable-subtitle">افعل الخير ولا تتوقف عن فعله</h3>

        <ul class="pricingTable-firstTable">
          <li class="pricingTable-firstTable_table">
            <h1 class="pricingTable-firstTable_table__header"><?= htmlentities($branch_3) ?></h1>
            <p class="pricingTable-firstTable_table__pricing"><span>$</span><span><?= htmlentities($money_3) ?></span><span>EGP</span></p>
            <ul class="pricingTable-firstTable_table__options">
              <li><?= htmlentities($money_p_3) ?> سهم</li>
            </ul>
            <button class="pricingTable-firstTable_table__getstart" onclick="window.location.href = 'contact_us.php';">تبرع الان</button>
            <span class="num">الثالث</span>
          </li><li class="pricingTable-firstTable_table">
            <h1 class="pricingTable-firstTable_table__header"><?= htmlentities($branch_1) ?></h1>
            <p class="pricingTable-firstTable_table__pricing"><span>$</span><span><?= htmlentities($money_1) ?></span><span>EGP</span></p>
            <ul class="pricingTable-firstTable_table__options">
              <li><?= htmlentities($money_p_1) ?> سهم</li>
            </ul>
            <button class="pricingTable-firstTable_table__getstart" onclick="window.location.href = 'contact_us.php';">تبرع الان</button>
            <span class="num">الاول</span>
          </li><li class="pricingTable-firstTable_table">
            <h1 class="pricingTable-firstTable_table__header"><?= htmlentities($branch_2) ?></h1>
            <p class="pricingTable-firstTable_table__pricing"><span>$</span><span><?= htmlentities($money_2) ?></span><span>EGP</span></p>
            <ul class="pricingTable-firstTable_table__options">
              <li><?= htmlentities($money_p_2) ?> سهم</li>
            </ul>
            <button class="pricingTable-firstTable_table__getstart" onclick="window.location.href = 'contact_us.php';">تبرع الان</button>
            <span class="num">الثاني</span>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>

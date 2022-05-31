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
    <title>Sahem</title>
  </head>
  <body onload="timer()">
    <?php require 'header.php';
      $result = $con->query("SELECT * FROM general WHERE active ='true';");
      $num = $con->affected_rows;
      if($num != 0 && $result == true){
        $row = $result-> fetch_assoc();
        $winner = array("فرع ميت غمر" => $row['money_mg'],  "فرع منية النصر" => $row['money_mn'], "فرع المنصوره" => $row['money_man']);
        arsort($winner);
        $i = 0;
          foreach ($winner as $key => $value) {
            $i++;
            $branch_[$i] = $key;
            $money_[$i] = $value;
            $money_p_[$i] = $money_[$i] / 100 ;
        };
      }
     ?>
    <div class="container">
      <div class="pricingTable">
        <h2 class="pricingTable-title">وَفِي ذَٰلِكَ فَلْيَتَنَافَسِ الْمُتَنَافِسُونَ</h2>
        <h3 class="pricingTable-subtitle">افعل الخير ولا تتوقف عن فعله</h3>

        <ul class="pricingTable-firstTable">
          <li class="pricingTable-firstTable_table">
            <h1 class="pricingTable-firstTable_table__header"><?= htmlentities($branch_[3]) ?></h1>
            <p class="pricingTable-firstTable_table__pricing"><span>$</span><span><?= htmlentities($money_[3]) ?></span><span>EGP</span></p>
            <ul class="pricingTable-firstTable_table__options">
              <li><?= htmlentities($money_p_[3]) ?> سهم</li>
            </ul>
            <h1 class="pricingTable-firstTable_table__header">تبرع الان عن طريق فودافون كاش</h1>
            <button class="pricingTable-firstTable_table__getstart">01014794899</button>
            <h1 style="margin-top: 30px;">او تواصل معنا</h1>
            <button class="pricingTable-firstTable_table__getstart" onclick="window.location.href = 'Mostafa_contact.php';">تبرع الان</button>
            <span class="num">الثالث</span>
          </li><li class="pricingTable-firstTable_table">
            <h1 class="pricingTable-firstTable_table__header"><?= htmlentities($branch_[1]) ?></h1>
            <p class="pricingTable-firstTable_table__pricing"><span>$</span><span><?= htmlentities($money_[1]) ?></span><span>EGP</span></p>
            <ul class="pricingTable-firstTable_table__options">
              <li><?= htmlentities($money_p_[1]) ?> سهم</li>
            </ul>
            <h1 class="pricingTable-firstTable_table__header">تبرع الان عن طريق فودافون كاش</h1>
            <button class="pricingTable-firstTable_table__getstart">01014794899</button>
            <h1 style="margin-top: 30px;">او تواصل معنا</h1>
            <button class="pricingTable-firstTable_table__getstart" onclick="window.location.href = 'Mohamed_contact.php';">تبرع الان</button>
            <span class="num">الاول</span>
          </li><li class="pricingTable-firstTable_table">
            <h1 class="pricingTable-firstTable_table__header"><?= htmlentities($branch_[2]) ?></h1>
            <p class="pricingTable-firstTable_table__pricing"><span>$</span><span><?= htmlentities($money_[2]) ?></span><span>EGP</span></p>
            <ul class="pricingTable-firstTable_table__options">
              <li><?= htmlentities($money_p_[2]) ?> سهم</li>
            </ul>
            <h1 class="pricingTable-firstTable_table__header">تبرع الان عن طريق فودافون كاش</h1>
            <button class="pricingTable-firstTable_table__getstart">01014794899</button>
            <h1 style="margin-top: 30px;">او تواصل معنا</h1>
            <button class="pricingTable-firstTable_table__getstart" onclick="window.location.href = 'Ibrahim_contact.php';">تبرع الان</button>
            <span class="num">الثاني</span>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>

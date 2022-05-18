    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/header.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <?php require("connection.php"); session_start();
    if (isset($_POST['signout']) == true) {
      unset($_SESSION);
      session_destroy();
    }
    ?>
    <div class="header_container">
      <nav role="navigation">
        <div id="menuToggle">
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>
          <ul id="menu">
            <li><a href="index.php">الرئيسيه</a></li>
            <li><a href="comparison.php">ساهم الان</a></li>
            <li id="dropdown"><a href="aim.php">توعيه</a>
              <ul>
                <li><a href="aim.php#section1">المشاركة المجتمعية</a> </li>
                <li><a href="aim.php#section2">تعريف المشاركة المجتمعية</a> </li>
                <li><a href="aim.php#section3">أهمية المشاركة المجتمعية</a> </li>
                <li><a href="aim.php#section4">أهداف المشاركة المجتمعية</a> </li>
                <li><a href="aim.php#section5">أساليب المشاركة المجتمعية وصورها</a> </li>
                <li><a href="aim.php#section6">أنواع المشاركة المجتمعية ومستوياتها</a> </li>
                <li><a href="aim.php#section7">معوقات المشاركة المجتمعية</a> </li>
                <li><a href="aim.php#section8">خاتمة</a> </li>
              </ul>
            </li>
            <li><a href="search.php">بحث</a></li>
            <li><a href="contact_us.php">تواصل معنا</a></li>
            <?php
              if (isset($_SESSION['name']) == true) {
                $name = $_SESSION['name'];
                $r = $con->query("SELECT * FROM log WHERE name='$name' LIMIT 1;");
                $num = $con->affected_rows;
                if($num != 0 && $r == true){
                  echo '<li><a href="form.php">تسجيل جديد</a></li>
                  <li><a href="all.php">عرض كل التبرعات</a></li>
                  <li>
                    <form action="index.php" method="post">
                      <input type="submit" id="logout" name="signout" value="تسجيل خروج">
                    </form>
                  </li>
                  ';
                }
              }
            ?>
          </ul>
        </div>
      </nav>
    </div>

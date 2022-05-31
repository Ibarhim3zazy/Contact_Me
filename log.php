<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/log.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <title>Sahem</title>
  </head>
  <body>
    <div class="align">
      <h3>Enter your password</h3>
      <form method="post">
        <div class="form__field">
          <input type="password" class="form__input" pattern=".{6,}" required name="pass">
          <span class="icon"></span>
        </div>
      </form>
      <p>Password must be six or more characters</p>
    </div>
    <?php require("connection.php"); session_start();
      if (isset($_POST['pass']) == true) {
        $password= $_POST['pass'];
        $result= $con->query("SELECT * FROM log WHERE pass='$password' LIMIT 1;");
          $num = $con->affected_rows;
          if($result == true){
            $row = $result-> fetch_assoc();
            $_SESSION['name'] = $row['name'];
            header("location: form.php");
          }else {
            echo "<p>incorect</p>";
          }
      }
     ?>
    <script src="js/script.js"></script>
  </body>
</html>

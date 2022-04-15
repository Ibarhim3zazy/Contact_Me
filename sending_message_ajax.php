<?php require("connection.php"); session_start();
  if (isset($_POST['name']) == true &&
      isset($_POST['mail']) == true &&
      isset($_POST['phone']) == true &&
      isset($_POST['message']) == true) {
        $name= htmlentities($_POST['name']);
        $mail= htmlentities($_POST['mail']);
        $phone= htmlentities($_POST['phone']);
        $message= htmlentities($_POST['message']);
        $result = $con->query("INSERT INTO messages VALUES(NULL, '$name', '$mail', '$phone', '$message');");
        if ($result == true) {
          echo "message successfully sent";
        }else {
          echo 'faild';
        }
  }
?>

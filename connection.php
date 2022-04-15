
<?php
  $con= new mysqli("localhost", "root", "", "contact_me");
  if ($con ->connect_errno) {
    die("connection error");
    // echo "connection error";
    // exit();
  };
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/contact_us.css">
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <title>Sahem</title>
  </head>
  <body onload="success()">
    <?php require 'header.php'; ?>
      <div class="container">
      	<div class="row">
      			<h1>تواصل معنا</h1>
      	</div>
      	<div class="row">
      			<h4 style="text-align:center">نحب ان نستمع الي نصائحكم واقتراحاتكم</h4>
      	</div>
      	<div class="row input-container">
      			<div class="col-xs-12">
      				<div class="styled-input wide">
      					<input type="text" id="name" required />
      					<label>الاسم</label>
      				</div>
      			</div>
      			<div class="col-md-6 col-sm-12">
      				<div class="styled-input">
      					<input type="email" id="mail" required/>
      					<label>الايميل</label>
      				</div>
      			</div>
      			<div class="col-md-6 col-sm-12">
      				<div class="styled-input" style="float:right;">
      					<input type="text" id="phone" required />
      					<label>رقم الهاتف</label>
      				</div>
      			</div>
      			<div class="col-xs-12">
      				<div class="styled-input wide">
      					<textarea id="message" required></textarea>
      					<label>الرساله</label>
      				</div>
      			</div>
      			<div class="col-xs-12">
      				<div class="btn-lrg submit-btn" onclick="sending_message()">ارسال</div>
      			</div>
      	</div>
      </div>
      <div id="success-msg">
        <i class="fa fa-check"></i>
        تم ارسال الرساله بنجاح.<br>
        سيتم تحويلك الي الصفحه الرئيسيه خلال ثواني
      </div>
    <script src="js/contact_us.js"></script>
  </body>
</html>

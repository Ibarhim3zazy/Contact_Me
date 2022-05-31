<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/all.min.css">
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <title>Sahem</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-bio">
          <div class="img-wrapper">
            <img src="images/person.png" alt="Person" />
          </div>
          <div class="person-info">
            <h3>مصطفي اسامه</h3>
            <p dir="rtl">
طالب بكلية التربيه النوعيه فرع منية النصر بالفرقه الرابع قسم حاسب الي</p>
          </div>
          <button class="card-btn">
            <span class="card-btn-contact">تواصل معي</span>
            <i class="fas fa-angle-up"></i>
          </button>
        </div>
        <div class="card-contact">
          <h4>تواصل معي</h4>
        </div>
        <div class="card-social email" onclick="Mostafa_mail()">
          <div class="icon-wrapper">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="contact-details">
            <h4>Email</h4>
            <p>BOSAQER5@gmail.com</p>
          </div>
          <span>></span>
        </div>
        <div class="card-social Whatsapp" onclick="Mostafa_whatsapp()">
          <div class="icon-wrapper">
            <i class="fa-brands fa-whatsapp"></i>
          </div>
          <div class="contact-details">
            <h4>Whatsapp</h4>
            <p>01012891276</p>
          </div>
          <span>></span>
        </div>
        <div class="card-social telegram" onclick="Mostafa_telegram()">
          <div class="icon-wrapper">
            <i class="fa-brands fa-telegram"></i>
          </div>
          <div class="contact-details">
            <h4>Telegram</h4>
            <p>01012891276</p>
          </div>
          <span>></span>
        </div>
      </div>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>

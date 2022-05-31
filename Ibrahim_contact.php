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
            <h3>ابراهيم السيد عزازي</h3>
            <p dir="rtl">طالب بكلية التربيه النوعيه فرع ميت غمر بالفرقه الرابع قسم حاسب الي</p>
          </div>
          <button class="card-btn">
            <span class="card-btn-contact">تواصل معي</span>
            <i class="fas fa-angle-up"></i>
          </button>
        </div>
        <div class="card-contact">
          <h4>تواصل معي</h4>
        </div>
        <div class="card-social email" onclick="Ibrahim_mail()">
          <div class="icon-wrapper">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="contact-details">
            <h4>Email</h4>
            <p>Ibrahim3zazy@gmail.com</p>
          </div>
          <span>></span>
        </div>
        <div class="card-social fb" onclick="Ibrahim_messenger()">
          <div class="icon-wrapper">
            <i class="fa-brands fa-facebook-messenger"></i>
          </div>
          <div class="contact-details">
            <h4>Messenger</h4>
            <p>@Ibrahim3zazy</p>
          </div>
          <span>></span>
        </div>
        <div class="card-social Whatsapp" onclick="Ibrahim_whatsapp()">
          <div class="icon-wrapper">
            <i class="fa-brands fa-whatsapp"></i>
          </div>
          <div class="contact-details">
            <h4>Whatsapp</h4>
            <p>01145452440</p>
          </div>
          <span>></span>
        </div>
        <div class="card-social telegram" onclick="Ibrahim_telegram()">
          <div class="icon-wrapper">
            <i class="fa-brands fa-telegram"></i>
          </div>
          <div class="contact-details">
            <h4>Telegram</h4>
            <p>01145452440</p>
          </div>
          <span>></span>
        </div>
        <div class="card-social sarhne" onclick="Ibrahim_sarhne()">
          <div class="icon-wrapper">
            <i class="fa-solid fa-user-secret"></i>
          </div>
          <div class="contact-details">
            <h4>sarhne</h4>
            <p>azazi</p>
          </div>
          <span>></span>
        </div>
      </div>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>

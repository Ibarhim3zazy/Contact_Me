document.querySelector(".card-btn").addEventListener("click", () => {
  document.querySelector(".container").classList.toggle("change");
});
function Ibrahim_mail() {
  window.open('mailto:Ibrahim3zazy@gmail.com?subject=تبرعات');
}
function Ibrahim_messenger() {
  window.open('http://m.me/.Ibrahim3zazy');
}
function Ibrahim_whatsapp() {
  window.open('https://wa.me/+2001145452440');
}
function Ibrahim_sarhne() {
  window.open('https://www.sarhne.com/azazi');
}
function Ibrahim_telegram() {
  window.open('https://t.me/Ibrahim3zazy');
}
function Mohamed_messenger() {
  window.open('http://m.me/100009683534482');
}
function Mohamed_whatsapp() {
  window.open('https://wa.me/+2001010512799');
}
function Mohamed_telegram() {
  window.open('https://t.me/M_Elsherif');
}
function Mostafa_mail() {
  window.open('mailto:BOSAQER5@gmail.com?subject=تبرعات');
}
function Mostafa_whatsapp() {
  window.open('https://wa.me/+2001012891276');
}
function Mostafa_telegram() {
  window.open('https://t.me/MustafaOsama');
}


function timer() {
  let date_timer = document.getElementById('date_timer').value
  // Set the date we're counting down to
var countDownDate = new Date(date_timer).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  // Output the result in an element with id="countdown"
  document.getElementById("countdown").innerHTML = days + " يوم " + hours + " ساعه " + minutes + " دقيقه " + seconds + " ث ";
  if (days == 0) {
    document.getElementById("countdown").innerHTML = hours + "يوم " + minutes + "m " + seconds + "s ";
  }

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "انتهي";
  }
}, 1000);

  let allmoney = parseInt(document.getElementById('allmoney').innerHTML);
  allmoney_ = ((allmoney / 30000) * 100).toFixed(2);
  document.getElementById('progress_bar').innerHTML = allmoney_ + '%';
  document.getElementById('progress_bar').style.width = allmoney_ + '%';
}

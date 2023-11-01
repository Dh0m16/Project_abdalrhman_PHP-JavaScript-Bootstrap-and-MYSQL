var countDownDate = new Date("Nov 5, 2023 23:59:59").getTime();

var x = setInterval(function () {
  var counter = document.querySelector("#countdown");

  if (!counter) {
    console.error('العنصر بمُعرف "countdown" غير موجود في الصفحة.');
    clearInterval(x);
    return;
  }

  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  counter.innerHTML = `${days} يوم، ${hours} ساعة، ${minutes} دقيقة، و${seconds} ثانية`;

  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "لقد وصلت متأخرًا!";
  }
}, 1000);




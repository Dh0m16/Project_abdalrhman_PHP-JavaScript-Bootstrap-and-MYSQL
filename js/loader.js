var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height;
var diff;
var sim;

function progressSim() {
  if (al >= 100) {
    clearInterval(sim);
    const myModalElement = document.getElementById('modal');
    if (myModalElement) {
      var myModal = new bootstrap.Modal(myModalElement, {
        keyboard: false
      });
      myModal.show();
    }
    const loader = document.querySelector(".loader-con");
    if (loader) {
      loader.style.display = 'none';
    }
    return;
  }
  diff = ((al / 100) * Math.PI * 2 * 10).toFixed(2);
  ctx.clearRect(0, 0, cw, ch);
  ctx.lineWidth = 17;
  ctx.fillStyle = '#0d6efd';
  ctx.strokeStyle = "#4285f4";
  ctx.textAlign = "center";
  ctx.font = "28px monospace";
  ctx.fillText(al + '%', cw * .52, ch * .5 + 5, cw + 12);
  ctx.beginPath();
  ctx.arc(100, 100, 75, start, diff / 10 + start, false);
  ctx.stroke();
  al++;
}

const win = document.getElementById("Winner");
if (win) {
  win.addEventListener('click', function () {
    if (al < 100) {
      sim = setInterval(progressSim, 20);
    }
  });
}

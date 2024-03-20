

var epssi = document.getElementById('epssi');
var epsno = document.getElementById('epsno');
var eps = document.getElementById('eps');

function updateStatus() {
  if (epssi.checked) {
    eps.disabled = true;
  } else {
    eps.disabled = false;
  }
}

epssi.addEventListener('change', updateStatus);
epsno.addEventListener('change', updateStatus);

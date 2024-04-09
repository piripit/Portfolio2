var typed = new Typed('#textDefile', {
  strings: ['FIATUWO', 'Moriel', 'Developpeur Full-Stack'],
  loop:1,
  backSpeed: 100,
  startDelay:100,
  typeSpeed: 50,
});
function openModal() {
  document.getElementById('about-modal').style.display = 'block';
}

function closeModal() {
  document.getElementById('about-modal').style.display = 'none';
}


document.getElementById('about-link').addEventListener('click', function(event) {
  event.preventDefault(); 
  openModal(); 
});
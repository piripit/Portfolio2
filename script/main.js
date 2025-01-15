var typed = new Typed("#textDefile", {
  strings: ["FIATUWO", "Moriel"],
  loop: 1,
  backSpeed: 100,
  startDelay: 100,
  typeSpeed: 50,
});

function openModal(modalId) {
  document.getElementById(modalId).style.display = "block";
}

function closeModal() {
  document.getElementById("skills-modal").style.display = "none";
  document.getElementById("about-modal").style.display = "none";
  document.getElementById("cvModal").style.display = "none";
  document.getElementById("projects-modal").style.display = "none";
}

document
  .getElementById("about-link")
  .addEventListener("click", function (event) {
    event.preventDefault();
    openModal("about-modal");
  });

document
  .getElementById("skills-link")
  .addEventListener("click", function (event) {
    event.preventDefault();
    openModal("skills-modal");
  });
document.addEventListener("DOMContentLoaded", function () {
  const linkedinBtn = document.getElementById("linkedin-btn");

  linkedinBtn.addEventListener("click", function () {
    window.open(
      "https://www.linkedin.com/in/y-moriel-fiatuwo-51544a225/",
      "_blank"
    );
  });
});
document.getElementById("cvDownloadBtn").addEventListener("click", function () {
  document.getElementById("cvModal").style.display = "block";
});

// Appeler la fonction au chargement de la page
checkVisits();

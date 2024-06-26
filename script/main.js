var typed = new Typed("#textDefile", {
  strings: ["FIATUWO", "Moriel", "Developpeur Front Junior"],
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

const projectsData = [
  {
    title: "Portfolio",
    description: "Création d'un portfolio statique.",
    imageUrl: "img/Moi.jpg",
    githubUrl: "https://github.com/piripit/Portfolio",
  }
 
];


function loadProjects() {
  const projectsContainer = document.getElementById("projects-container");

  
  projectsContainer.innerHTML = "";

  
  projectsData.forEach(project => {
    const projectElement = document.createElement("div");
    projectElement.classList.add("project");
    projectElement.innerHTML = `
      <h3>${project.title}</h3>
      <img src="${project.imageUrl}" alt="${project.title}">
      <p>${project.description}</p>
      <div class="project-links">
        <a href="${project.githubUrl}" target="_blank">GitHub</a>
      </div>
      <hr>
    `;
    projectsContainer.appendChild(projectElement);
  });
}


document.querySelector(".menu li:nth-child(4) a").addEventListener("click", function(event) {
  event.preventDefault(); 
  openModal("projects-modal"); 
  loadProjects(); 
})
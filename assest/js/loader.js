const loader = document.getElementById("pageLoader");
const content = document.getElementById("content");
const progress = document.getElementById("progress");

let load = 0;
let interval = setInterval(() => {
  if (load < 95) {
    load += 1;
    progress.style.width = load + "%";
  }
}, 20); // simulate loading until 95%

window.onload = () => {
  clearInterval(interval);
  
  // Smoothly animate from 95% to 100%
  setTimeout(() => {
    progress.style.width = "100%";
  }, 100); // slight delay before animating to 100%

  // Wait for the transition to complete, then show content
  setTimeout(() => {
    loader.style.display = "none";
    content.style.display = "block";
  }, 1200); // wait 1.2s for the transition (matching CSS duration)
};

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
  progress.style.width = "100%";

  setTimeout(() => {
    loader.style.display = "none";
    content.style.display = "block";
  }, 300); // optional: small delay for smooth transition
};
window.addEventListener("load", () => {
  const pageLoader = document.getElementById("pageLoader");
  const spinnerLoader = document.getElementById("spinnerLoader");
  const progressBar = document.getElementById("progress-bar"); // 👈 progress bar element

  // Set progress bar animation speed
  if (progressBar) {
    progressBar.style.animation = "loadProgress 0.9s linear forwards";
  }

  // Home page loader
  if (pageLoader) {
    setTimeout(() => {
      pageLoader.style.opacity = "0";
      pageLoader.style.transition = "opacity 0.5s ease";
      setTimeout(() => {
        pageLoader.style.display = "none";

        // 👇 Add animation classes after loader finishes
        document.getElementById("hero-section")?.classList.add("animate-hero");
        document.getElementById("hero-title")?.classList.add("animate-title");
        document.getElementById("hero-text")?.classList.add("animate-text");
        document.getElementById("hero-btn")?.classList.add("animate-btn");
      }, 300);
    }, 900);
  }

  // Spinner loader
  if (spinnerLoader) {
    setTimeout(() => {
      spinnerLoader.style.opacity = "0";
      spinnerLoader.style.transition = "opacity 0.5s ease";
      setTimeout(() => spinnerLoader.style.display = "none", 500);
    }, 1000);
  }
});


document.addEventListener("DOMContentLoaded", function () {
  const loader = document.getElementById("pageLoader");
  const content = document.getElementById("content");
  const progress = document.getElementById("progress");
  const spinner = document.getElementById("spinnerLoader");

  const navigated = sessionStorage.getItem('navigated') === 'true';

  document.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', function (e) {
      const isSameTab = !link.target || link.target === '_self';
      const isInternal = link.href && link.href.includes(location.hostname);

      if (isSameTab && isInternal) {
        e.preventDefault();
        sessionStorage.setItem('navigated', 'true');

        if (spinner) spinner.style.display = "flex";
        if (content) content.style.display = "none";
        if (loader) loader.style.display = "none";

        setTimeout(() => {
          window.location.href = link.href;
        }, 600);
      }
    });
  }); 

  if (navigated) {
    // Coming from link click – skip logo loader, hide it
    if (loader) loader.style.display = "none";
    if (progress) progress.style.width = "0%";
    if (spinner) spinner.style.display = "none";
    if (content) content.style.display = "block";
    sessionStorage.removeItem('navigated');
  } else {
    // First hard refresh — show logo loader
    let load = 0;
    const startTime = Date.now();
    const interval = setInterval(() => {
      if (load < 95) {
        load += 1;
        if (progress) progress.style.width = load + "%";
      }
    }, 20);

    window.onload = () => {
      clearInterval(interval);
      if (progress) progress.style.width = "100%";
      const elapsed = Date.now() - startTime;
      const minTime = 1000;
      const remaining = Math.max(minTime - elapsed, 0);

      setTimeout(() => {
        if (loader) loader.style.display = "none";
        if (content) content.style.display = "block";
      }, remaining + 200);
    };
  }
});

// const loader = document.getElementById("pageLoader");
// const content = document.getElementById("content");
// const progress = document.getElementById("progress");

// let load = 0;
// let interval = setInterval(() => {
//   if (load < 95) {
//     load += 1;
//     progress.style.width = load + "%";
//   }
// }, 20); // simulate loading until 95%

// window.onload = () => {
//   clearInterval(interval);
  
//   // Smoothly animate from 95% to 100%
//   setTimeout(() => {
//     progress.style.width = "100%";
//   }, 100); // slight delay before animating to 100%

//   // Wait for the transition to complete, then show content
//   setTimeout(() => {
//     loader.style.display = "none";
//     content.style.display = "block";
//   }, 1100); // wait 1.2s for the transition (matching CSS duration)
// };

// Detect navigation click
    document.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', function (e) {
        const isSameTab = !link.target || link.target === '_self';
        const isInternal = link.href && link.href.includes(location.hostname);

        if (isSameTab && isInternal) {
          e.preventDefault();
          sessionStorage.setItem('navigated', 'true'); // mark this is a nav click
          document.getElementById("spinnerLoader").style.display = "flex";
          setTimeout(() => {
            window.location.href = link.href;
          }, 600);
        }
      });
    });

    // First loader logic
    const loader = document.getElementById("pageLoader");
    const content = document.getElementById("content");
    const progress = document.getElementById("progress");
    const navigated = sessionStorage.getItem('navigated') === 'true';

    if (navigated) {
      // Skip first loader
      loader.style.display = "none";
      content.style.display = "block";
      sessionStorage.removeItem('navigated'); // reset
    } else {
      // Show first loader with dynamic progress
      let load = 0;
      const startTime = Date.now();
      const interval = setInterval(() => {
        if (load < 95) {
          load += 1;
          progress.style.width = load + "%";
        }
      }, 20);

      window.onload = () => {
        clearInterval(interval);
        progress.style.width = "100%";
        const elapsed = Date.now() - startTime;
        const minTime = 1000;
        const remaining = Math.max(minTime - elapsed, 0);

        setTimeout(() => {
          loader.style.display = "none";
          content.style.display = "block";
        }, remaining + 200);
      };
    }
  
document.addEventListener('DOMContentLoaded', function () {
   AOS.init({
      once: true,
      duration: 1000,
      startEvent: 'DOMContentLoaded',
   });

   // Refresh after slight delay to ensure animation on load
   setTimeout(() => {
      AOS.refresh();
   }, 100);
});

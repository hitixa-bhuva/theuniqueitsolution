// 1 counter
        document.addEventListener("DOMContentLoaded", function () {
            const counters = document.querySelectorAll(".count");
            const options = { threshold: 0.5 };

            const startCounter = (entry) => {
                if (entry.isIntersecting) {
                    counters.forEach(counter => {
                        let endValue = parseInt(counter.getAttribute("data-end"));
                        let suffix = counter.getAttribute("data-suffix") || "";
                        let currentValue = 0;
                        let duration = 2000; // 2 seconds
                        let increment = endValue / (duration / 30);

                        let interval = setInterval(() => {
                            currentValue += increment;
                            if (currentValue >= endValue) {
                                currentValue = endValue;
                                clearInterval(interval);
                            }
                            counter.textContent = Math.floor(currentValue) + suffix;
                        }, 30);
                    });
                }
            };

            let observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => startCounter(entry));
            }, options);

            observer.observe(document.querySelector(".counter"));
        });

        // <!--2  slick slider Our Services -->
        document.addEventListener("DOMContentLoaded", function () {
            AOS.init();

            new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 3000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });
        
// about us counter
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".vertical-counter li span");
    const options = { threshold: 0.5 };

    const startCounter = (entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("counting"); // Prevent multiple triggers
            let endValue = parseInt(entry.target.getAttribute("data-end")) || 100;
            let suffix = entry.target.getAttribute("data-suffix") || ""; // Handle suffix like % or +
            let duration = 2000; // 2 seconds
            let increment = endValue / (duration / 30);
            let currentValue = 0;

            let interval = setInterval(() => {
                currentValue += increment;
                if (currentValue >= endValue) {
                    currentValue = endValue;
                    clearInterval(interval);
                }
                entry.target.textContent = Math.floor(currentValue) + suffix;
            }, 30);
        }
    };

    let observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.target.classList.contains("counting")) {
                startCounter(entry);
            }
        });
    }, options);

    counters.forEach(counter => observer.observe(counter));
});

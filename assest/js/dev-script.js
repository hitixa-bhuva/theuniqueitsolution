// 1 counter
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".count");
    const options = { threshold: 0.5 };

    const startCounter = (entry, observer) => {
        if (entry.isIntersecting) {
            counters.forEach(counter => {
                let endValue = parseInt(counter.getAttribute("data-end"));
                let suffix = counter.getAttribute("data-suffix") || "";
                let currentValue = 0;
                let duration = 2000;
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

            // 👇 Stop observing after animation runs once
            observer.unobserve(entry.target);
        }
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => startCounter(entry, observer));
    }, options);

    const counterSection = document.querySelector(".counter");
    if (counterSection) observer.observe(counterSection);
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

// bottom to top
document.addEventListener("DOMContentLoaded", function () {
    const scrollBtn = document.querySelector(".scroll-to-top-btn");

    function toggleScrollBtn() {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrolledPercent = (scrollTop / totalHeight) * 100;

        if (scrolledPercent >= 10) {
            scrollBtn.classList.add("show");
        } else {
            scrollBtn.classList.remove("show");
        }
    }

    window.addEventListener("scroll", toggleScrollBtn);
    toggleScrollBtn(); // ✅ Check immediately on load

    scrollBtn.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});



// slider
if (window.jQuery) {
    $(document).ready(function () {
        var slider = $(".slider").slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            autoplay: false,
            arrows: false,
            draggable: false,
            swipe: false
        });

        // Custom Navigation Buttons
        $(".prev").click(function () {
            slider.slick("slickPrev");
        });

        $(".next").click(function () {
            slider.slick("slickNext");
        });
    });
} else {
    console.error("jQuery failed to load!");
}


/**
 * Main JavaScript functionality for Drakkar theme
 */

// DOM Ready
document.addEventListener("DOMContentLoaded", function () {
  // Smooth scrolling for anchor links
  const anchorLinks = document.querySelectorAll('a[href^="#"]');

  anchorLinks.forEach(function (link) {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href");

      if (href !== "#" && href !== "#0") {
        const target = document.querySelector(href);

        if (target) {
          e.preventDefault();

          const headerHeight =
            document.querySelector(".site-header").offsetHeight;
          const targetPosition = target.offsetTop - headerHeight;

          window.scrollTo({
            top: targetPosition,
            behavior: "smooth",
          });
        }
      }
    });
  });

  // Header scroll effect
  let lastScrollY = window.scrollY;
  const header = document.querySelector(".site-header");

  window.addEventListener("scroll", function () {
    const currentScrollY = window.scrollY;

    if (currentScrollY > 100) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }

    lastScrollY = currentScrollY;
  });
});

/**
 * Statistics Counter Animation (for homepage)
 */
function animateCounters() {
  const counters = document.querySelectorAll(".stat-number");

  counters.forEach(function (counter) {
    const target = parseInt(counter.getAttribute("data-target"));
    const duration = 2000; // 2 seconds
    const increment = target / (duration / 16); // 60fps
    let current = 0;

    const timer = setInterval(function () {
      current += increment;

      if (current >= target) {
        current = target;
        clearInterval(timer);
      }

      // Format number based on the target value
      if (target >= 1000000) {
        counter.textContent = (current / 1000000).toFixed(1) + "M";
      } else if (target >= 1000) {
        counter.textContent = (current / 1000).toFixed(1) + "K";
      } else {
        counter.textContent = Math.floor(current);
      }
    }, 16);
  });
}

/**
 * Intersection Observer for animations
 */
if (typeof IntersectionObserver !== "undefined") {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        const target = entry.target;

        // Animate counters when they come into view
        if (target.classList.contains("stats-section")) {
          animateCounters();
          observer.unobserve(target);
        }

        // Add animation classes
        target.classList.add("animate-in");
      }
    });
  }, observerOptions);

  // Observe elements when DOM is ready
  document.addEventListener("DOMContentLoaded", function () {
    const animatedElements = document.querySelectorAll(
      ".stats-section, .animate-on-scroll"
    );
    animatedElements.forEach(function (el) {
      observer.observe(el);
    });
  });
}

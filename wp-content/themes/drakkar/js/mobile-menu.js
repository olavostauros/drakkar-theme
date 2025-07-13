/**
 * Mobile Menu Toggle Functionality
 */
function toggleMobileMenu() {
  const navigation = document.getElementById("site-navigation");
  const menuToggle = document.querySelector(".menu-toggle");

  if (navigation) {
    navigation.classList.toggle("mobile-menu-open");

    // Update aria-expanded attribute
    const expanded = navigation.classList.contains("mobile-menu-open");
    menuToggle.setAttribute("aria-expanded", expanded);
  }
}

/**
 * Close mobile menu when clicking outside
 */
document.addEventListener("click", function (event) {
  const navigation = document.getElementById("site-navigation");
  const menuToggle = document.querySelector(".menu-toggle");
  const isClickInsideNav = navigation.contains(event.target);
  const isClickOnToggle = menuToggle.contains(event.target);

  if (
    !isClickInsideNav &&
    !isClickOnToggle &&
    navigation.classList.contains("mobile-menu-open")
  ) {
    navigation.classList.remove("mobile-menu-open");
    menuToggle.setAttribute("aria-expanded", false);
  }
});

/**
 * Close mobile menu when window is resized to desktop
 */
window.addEventListener("resize", function () {
  const navigation = document.getElementById("site-navigation");
  const menuToggle = document.querySelector(".menu-toggle");

  if (
    window.innerWidth > 768 &&
    navigation.classList.contains("mobile-menu-open")
  ) {
    navigation.classList.remove("mobile-menu-open");
    menuToggle.setAttribute("aria-expanded", false);
  }
});

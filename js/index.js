window.addEventListener("scroll", function () {
  let navbar = document.querySelector(".navbar");
  if (this.window.scrollY > 20) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});
document
  .getElementById("custom-toggler")
  .addEventListener("click", function () {
    const navbarNav = document.getElementById("navbarNav");
    if (navbarNav.classList.contains("show")) {
      navbarNav.classList.remove("show");
    } else {
      navbarNav.classList.add("show");
    }
  });

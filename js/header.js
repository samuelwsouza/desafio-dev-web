// hamburguer
document.addEventListener("DOMContentLoaded", () => {
  const hamburguer = document.getElementById("hamburguer");
  const navMenu = document.querySelector(".nav-centro");

  hamburguer.addEventListener("click", () => {
    navMenu.classList.toggle("show");
  });

  // biome-ignore lint/complexity/noForEach: <explanation>
    navMenu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      navMenu.classList.remove("show");
    });
  });

  const header = document.getElementById("header");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  });
});
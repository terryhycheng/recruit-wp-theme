const menuIcon = document.querySelector("#menu-icon");
const menuIconOpen = document.querySelector("#menu-icon-open");
const navbar = document.querySelector("#navbar");

menuIcon.addEventListener("click", () => {
  navbar.classList.remove("hide");
});

menuIconOpen.addEventListener("click", () => {
  navbar.classList.add("hide");
});

const header = document.querySelector("header");
const hamburger = document.querySelector(".hamburger");
const menu = document.querySelector(".drop")

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("open");
    menu.classList.toggle("opened")
})
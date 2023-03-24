const responsiveNav = document.querySelector(".responsiveNav");
const navigations = document.querySelector(".Navigations");

responsiveNav.addEventListener("click", () => {
    responsiveNav.classList.toggle("active");
    navigations.classList.toggle("active");
})


document.querySelectorAll(".navigationLinks").forEach(n => n.addEventListener("Click", () => {
    responsiveNav.classList.remove("active");
    navigations.classList.remove("active");
}))
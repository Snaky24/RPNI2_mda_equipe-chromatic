document.addEventListener("DOMContentLoaded", () => {
    const burger = document.querySelector(".entete__burger");
    const menu = document.querySelector(".entete__menu");

    if (burger && menu) {
        burger.addEventListener("click", () => {
            menu.classList.toggle("is-open");

            const ouvert = menu.classList.contains("is-open");
            burger.setAttribute("aria-expanded", ouvert ? "true" : "false");
        });
    }
});
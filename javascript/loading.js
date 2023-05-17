//  Preloader script
document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("load", function () {
        const preloader = document.querySelector(".preloader");
        preloader.classList.add("fade-out");
        setTimeout(function () {
            preloader.style.display = "none";
        }, 500);
    });
});


window.addEventListener("load", function () {
    const preloader = document.querySelector(".preloader");
    preloader.classList.add("fade-out");
    setTimeout(function () {
        preloader.style.display = "none";
    }, 500);
});

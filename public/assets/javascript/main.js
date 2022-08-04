let elt = document.querySelectorAll(".btn1");

elt.forEach((el) => {
    el.addEventListener("mouseenter", (e) => {
        e.target.querySelector(".b").classList.add("marg");
    });
    el.addEventListener("mouseleave", (e) => {
        e.target.querySelector(".b").classList.remove("marg");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var elems = document.querySelectorAll(".carousel");
    var instances = M.Carousel.init(elems, {
        fullWidth: true,
        indicators: true,
    });
});

let projects = document.querySelectorAll(".project");

projects.forEach((project) => {
  project.addEventListener("mouseenter", (e) => {
    let img = e.target.querySelector("img");
    img.className = "";
  });
  project.addEventListener("mouseleave", (e) => {
    let img = e.target.querySelector("img");
    img.className = "hide";
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var menubtn = document.querySelectorAll(".modal");
  var instances = M.Modal.init(menubtn, {
    opacity: 1,
    startingTop: "30%",
    endingTop: "10%",
  });
});

let elt = document.querySelectorAll(".btn1");

elt.forEach((el) => {
  el.addEventListener("mouseenter", (e) => {
    e.target.querySelector(".b").classList.add("marg");
  });
  el.addEventListener("mouseleave", (e) => {
    e.target.querySelector(".b").classList.remove("marg");
  });
});

let menubtn = document.querySelectorAll(".modal1-trigger");
let modal1 = document.querySelector(".modal1");
let main = document.querySelector(".main");
let content = document.querySelector(".modal1-content");

menubtn.forEach((elt) => {
  elt.addEventListener("click", (e) => {
    if (e.target.innerHTML == "menu") {
      e.target.innerHTML = "arrow_forward";
      e.target.classList.add("white-text");
      e.target.classList.remove("black-text");
      content.classList.add("w3-animate-bottom");
      modal1.classList.remove("hide");
      main.classList.add("hide");
      setvalue();
    } else {
      e.target.classList.remove("white-text");
      e.target.classList.add("black-text");
      modal1.classList.add("hide");
      main.classList.remove("hide");
      e.target.innerHTML = "menu";
    }
  });
});
let menubtn1 = document.querySelectorAll(".modal1-content a");
menubtn1.forEach((elt) => {
  elt.addEventListener("click", (e) => {
    menubtn.forEach((elt1) => {
      elt1.innerHTML = "<i class='material-icons menubar2'>menu</i>";
      elt1.classList.remove("white-text");
      elt1.classList.add("black-text");
    });
    modal1.classList.add("hide");
    main.classList.remove("hide");
  });
});

function setvalue() {
  setInterval(() => {
    content.classList.remove("hide");
  }, 400);
}

// window.addEventListener("resize", reportWindowSize);

// function reportWindowSize() {
//   var a = document.querySelector("#carousel1");
//   var b = document.querySelector("#carousel2");
//   if (window.innerWidth < 600) {
//     var a = document.querySelector("#carousel1");
//     var b = document.querySelector("#carousel2");
//     a.classList.remove("carousel");
//     b.classList.remove("carousel");
//   } else {
//     a.classList.add("carousel");
//     b.classList.add("carousel");
//   }
// }

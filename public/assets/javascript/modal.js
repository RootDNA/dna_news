let modaltrigger = document.querySelectorAll(".modal-trigger");

modaltrigger.forEach((elt) => {
  elt.addEventListener("click", (e) => {
    e.preventDefault();
    target = e.target.dataset.target;
    modal = document.querySelector(target);
    console.log(e.target.dataset.target);
    modal.classList.toggle("open");
    document.body.classList.toggle("open");
  });
});

try {
  let nav = document.querySelectorAll(".cathegory ul li a");
  let forms = document.querySelectorAll(".forms");
  nav.forEach((elt) => {
    elt.addEventListener("click", (e) => {
      let target = e.target.dataset.target;

      nav.forEach((el) => {
        if (el.parentNode.classList.contains("active")) {
          el.parentNode.classList.remove("active");
        }
      });
      e.target.parentNode.classList.add("active");
      let form = document.querySelector(target);
      forms.forEach((el) => {
        if (!el.classList.contains("hide")) {
          el.classList.add("hide");
        }
      });
      form.classList.remove("hide");
    });
  });
} catch (error) {}

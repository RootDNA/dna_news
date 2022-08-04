document
  .querySelector(".head #expand_more")
  .addEventListener("click", (e) => e.target.classList.toggle("open"));

document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll(".dropdown-trigger");
  var instances = M.Dropdown.init(elems, {
    coverTrigger: false,
  });
});

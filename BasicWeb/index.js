document.addEventListener("DOMContentLoaded", function () {
  var dropdownMenus = document.querySelectorAll(".has-dropdown");

  dropdownMenus.forEach(function (menu) {
    var menuLink = menu.querySelector("a");
    var submenu = menu.querySelector("ul");

    menuLink.addEventListener("click", function (event) {
      event.preventDefault();
      event.stopPropagation();

      submenu.classList.toggle("active");
    });

    menu.addEventListener("mouseleave", function () {
      submenu.classList.remove("active");
    });
  });

  document.addEventListener("click", function () {
    dropdownMenus.forEach(function (menu) {
      var submenu = menu.querySelector("ul");
      submenu.classList.remove("active");
    });
  });
});

const navLinks = document.querySelectorAll("nav.site-menu > a");

//add a class site-link to all of the links inside of site-menu.
//NOTE: This is because wordpress sucks.
navLinks.forEach(function (navLink) {
  navLink.classList.add("site-link");
});

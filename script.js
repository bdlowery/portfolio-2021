const navLinks = document.querySelectorAll("div.masthead > nav.site-menu > a");

//add a class site-link to all of the links inside of the masthead site-menu.
//NOTE: This is because wordpress sucks.
navLinks.forEach(function (navLink) {
  navLink.classList.add("site-link");
});

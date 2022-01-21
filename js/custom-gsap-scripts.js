// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {
  console.log("DOM loaded");

  // wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener(
    "load",
    function (e) {
      // custom GSAP code goes here
      console.log("window loaded");

      var tl = new TimelineMax();
      var b = document.querySelector("#b");
      var r = document.querySelector("#r");
      var i = document.querySelector("#i");
      var a = document.querySelector("#a");
      var n = document.querySelector("#n");
      var n = document.querySelector("#n");
      var introduction = document.querySelector("#introduction");
      var job = document.querySelector("#job");

      tl.staggerFrom(
        introduction,
        1,
        {
          x: -700,
          ease: Power1.easeOut,
        },
        0.05
      );
      tl.staggerFrom(
        b,
        1,
        {
          x: -600,
          ease: Circ.easeOut,
        },
        0.05,
        "-=0.3"
      );
      tl.staggerFrom(
        r,
        1,
        {
          y: -900,
          ease: Circ.easeOut,
        },
        0.05,
        "-=0.8"
      );
      tl.staggerFrom(
        i,
        1,
        {
          y: -900,
          ease: Circ.easeOut,
        },
        0.05,
        "-=0.8"
      );
      tl.staggerFrom(
        a,
        1,
        {
          y: -900,
          ease: Circ.easeOut,
        },
        0.05,
        "-=0.8"
      );
      tl.staggerFrom(
        n,
        1,
        {
          y: -900,
          ease: Circ.easeOut,
        },
        0.05,
        "-=0.8"
      );
      tl.staggerFrom(
        job,
        1,
        {
          x: -1850,
          ease: Power1.easeOut,
        },
        0.05,
        "-=0.2"
      );
    },
    false
  );
});

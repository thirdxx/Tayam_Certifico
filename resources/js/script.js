$(document).ready(() => {
  const activePage = window.location.pathname;
  const navLinks = $(".nav__link").toArray();

  if (activePage === "/Tayam_Certifico/") {
    $(navLinks[0]).addClass("active");
  } else {
    navLinks.forEach((link) => {
      if (link.href.includes(activePage)) {
        $(link).addClass("active");
      }
    });
  }
});

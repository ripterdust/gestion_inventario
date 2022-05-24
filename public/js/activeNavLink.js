const activeClass = "activo";
const { pathname } = window.location;

const navLink = document.querySelectorAll(".options a");

navLink.forEach((link) => {
    if (link.href.includes(`${pathname}`)) link.classList.add(activeClass);
});

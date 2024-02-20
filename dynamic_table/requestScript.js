const menuTriggers = document.querySelectorAll(".menu-trigger");

menuTriggers.forEach((trigger) => {
  trigger.addEventListener("click", () => {
    const menu = trigger.querySelector(".dropdown-menu");
    menu.classList.toggle("show");
  });
});

// Close menu when clicking outside
document.addEventListener("click", (event) => {
  const isClickInsideMenu = document.querySelector(".menu-trigger").contains(event.target);

  if (!isClickInsideMenu) {
    // If the click wasn't within the menu area, close any open menus
    const openMenus = document.querySelectorAll(".dropdown-menu.show");
    openMenus.forEach((menu) => menu.classList.remove("show"));
  }
});

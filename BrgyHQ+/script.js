//Functionality for changing style (display blocked/none)

// Select all the side menu items
const menuItems = document.querySelectorAll(".side-content .side-menu ul li a");

// Initially hide all content sections, except for the first one
const contentSections = document.querySelectorAll(".content-section");
contentSections.forEach((section) => {
  section.style.display = "none";
});
document.getElementById("content-dashboard").style.display = "block"; // Show Dashboard

// Add click event listeners to each menu item
menuItems.forEach((item) => {
  item.addEventListener("click", function (event) {
    // Remove 'highlighted' class from all menu items
    menuItems.forEach((item) => item.classList.remove("highlighted"));

    // Add 'highlighted' class to the currently clicked item
    this.classList.add("highlighted");

    // Hide all the content sections
    contentSections.forEach((section) => {
      section.style.display = "none";
    });

    // Get the ID of the content to show from the 'href' attribute
    const contentId = this.getAttribute("href").substring(1);

    // Show the corresponding content section
    document.getElementById(contentId).style.display = "block";
  });
});

//toggle for menu added by joshua
const MessageMenu = document.getElementById("MessageMenu");
const NotifMenu = document.getElementById("NotifMenu");
const ProfMenu = document.getElementById("ProfMenu");

function toggleMenu(menuId) {
  if (menuId === "MessageMenu") {
    MessageMenu.classList.toggle("open-menu");
    NotifMenu.classList.remove("open-menu");
    ProfMenu.classList.remove("open-menu");
  } else if (menuId === "NotifMenu") {
    NotifMenu.classList.toggle("open-menu");
    MessageMenu.classList.remove("open-menu");
    ProfMenu.classList.remove("open-menu");
  } else if (menuId === "ProfMenu") {
    ProfMenu.classList.toggle("open-menu");
    MessageMenu.classList.remove("open-menu");
    NotifMenu.classList.remove("open-menu");
  }
}

// Close menus when clicking outside
document.addEventListener("click", function (event) {
  // If the click target is NOT one of the menus or their trigger elements...
  if (!event.target.closest(".mini-menu-wrap, .notify-icon, .bg-img")) {
    MessageMenu.classList.remove("open-menu");
    NotifMenu.classList.remove("open-menu");
    ProfMenu.classList.remove("open-menu");
  }
});

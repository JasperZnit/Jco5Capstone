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

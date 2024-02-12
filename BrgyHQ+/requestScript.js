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

const searchInput = document.querySelector(".record-search");
const recordTableBody = document.getElementById("recordTableBody");

searchInput.addEventListener("input", () => {
  const searchTerm = searchInput.value.toLowerCase(); // Get search term and normalize
  const tableRows = recordTableBody.querySelectorAll("tr");

  tableRows.forEach((row) => {
    const rowData = row.textContent.toLowerCase(); // Get all text inside the row

    if (rowData.includes(searchTerm)) {
      row.style.display = ""; // Show matching rows
    } else {
      row.style.display = "none"; // Hide non-matching rows
    }
  });
});

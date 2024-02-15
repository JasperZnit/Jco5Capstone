document.addEventListener("DOMContentLoaded", function () {
  const selectElement = document.querySelector(".form-select");
  const otherDiv = document.querySelector(".other");

  selectElement.addEventListener("change", function () {
    if (this.value === "14") {
      // Check if the value is "14" (Other)
      otherDiv.style.display = "block";
    } else {
      otherDiv.style.display = "none";
    }
  });
});

// Image Upload
const imageInput = document.getElementById("image-upload");
const profileImage = document.getElementById("profile-image");
const changePictureButton = document.getElementById("change-picture");

changePictureButton.addEventListener("click", () => imageInput.click());

imageInput.addEventListener("change", (event) => {
  // Use FileReader to preview uploaded image (add this code)
});

// Form Submission, Data Storage & Validation
const profileForm = document.getElementById("profile-form");

profileForm.addEventListener("submit", (event) => {
  event.preventDefault(); // Prevent default form submission

  // Gather form data, perform validation
  // Implement data storage (LocalStorage, server-side database)
});

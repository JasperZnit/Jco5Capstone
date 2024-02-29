//For the visibility og password using eye-icon
function togglePasswordVisibility(eyeicon, input) {
  if (input.type === "password") {
    input.type = "text";
    eyeicon.src = "eye-open-blue.png";
  } else {
    input.type = "password";
    eyeicon.src = "eye-close.png";
  }
}
const eyeicon2 = document.getElementById("eyeicon2"); //calling the img tag using its ID "eyeicon2"
const psw2 = document.getElementById("psw2"); //caling the input tag using its ID "psw2"
eyeicon2.addEventListener("click", () => togglePasswordVisibility(eyeicon2, psw2)); //Once you click the eyeicon it will trigger the function with a name togglePasswordVisibility

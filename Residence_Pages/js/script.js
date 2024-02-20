//index
var signup = document.getElementById("signup");
var login = document.getElementById("login");

signup.onclick = function (e) {
  e.target.className = e.target.className.replace("levelDown", "levelUp");
  login.className = login.className.replace("levelUp", "levelDown");
};

login.onclick = function (e) {
  e.target.className = e.target.className.replace("levelDown", "levelUp");
  signup.className = signup.className.replace("levelUp", "levelDown");
};

// sign up password toggle
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
  // Toggle password type between "password" and "text"
  password.type = password.type === "password" ? "text" : "password";

  // Toggle icon between "eye" and "eye-slash"
  this.classList.toggle("bi-eye");
});

// login password toggle
const logintogglePassword = document.querySelector("#logintogglePassword");
const loginpassword = document.querySelector("#loginpassword");

logintogglePassword.addEventListener("click", function () {
  // Toggle password type between "password" and "text"
  loginpassword.type = loginpassword.type === "password" ? "text" : "password";

  // Toggle icon between "eye" and "eye-slash"
  this.classList.toggle("bi-eye");
});

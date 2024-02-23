document.getElementById("profile-picture-input").addEventListener("click", function () {
  document.getElementById("profile-picture-file").click();
});

document.getElementById("profile-picture-file").addEventListener("change", function () {
  var file = this.files[0];
  var reader = new FileReader();

  reader.onload = function (event) {
    document.getElementById("profile-picture-input").src = event.target.result;
  };

  reader.readAsDataURL(file);
});

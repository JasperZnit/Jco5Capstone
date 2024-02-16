<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous" />
    <title>Registration Form</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com" />
  </head>
  <body class="d-flex justify-content-center align-items-center">
    <div class="d-flex container m-5 justify-content-center">
      <form class="form-control" id="registrationForm">
        <div class="regform-wrapper">
          <div class="regform-indent p-4">
            <div class="d-flex px-5">
              <div>
                <h2 class="mb-4">BrgyHQ+ Registration Form</h2>
              </div>
              <div class="ms-auto align-self-center">
                <button class="btn btn-secondary">
                  <a class="text-decoration-none text-white" href="index.php"> Cancel </a>
                </button>
              </div>
            </div>
            <div class="row justify-content-center align-items-end g-3 p-5">
              <input class="form-control mt-4" type="email" id="email" name="email" placeholder="Email" required />
              <input class="form-control mt-4" type="text" id="phone" name="phone" placeholder="Phone Number" required />
              <input class="form-control mt-4" type="password" id="password" name="password" placeholder="Password" required />
              <input class="form-control mt-4" type="password" id="password" name="password" placeholder="Confirm password" required />

              <div class="container p-4">
                <label class="fw-bold">Terms and Conditions</label>
                <p>
                  By creating an account, you agree to our <a href="terms.php">Terms and Conditions</a> and <a href="privacy.php">Privacy Policy</a>.
                </p>
                <input type="checkbox" id="terms_and_conditions" name="terms_and_conditions" required />
                <label for="terms_and_conditions">I agree to the terms and conditions</label>
              </div>

              <button class="btn btn-primary mt-4" type="submit">Sign Up</button>

              <p class="text-center text-muted mb-2">Or use your email address</p>
              <div class="bg-white mt-4">
                <label for="gSignIn" class="btn btn-danger w-100 fw-bold" onclick="onSignIn()">
                  Sign Up with
                  <i class="fa-brands fa-google-plus-g"></i>
                </label>
                <br />
                <div id="gSignIn" style="display: none"></div>
              </div>
              <div class="row justify-content-center align-items-end g-3 py-2">
                <p>Already have an account? <a class="" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Sign In</a></p>
              </div>
            </div>
          </div>
        </div>
      </form>

      <!-- Login Modal -->
      <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="loginModalLabel">Login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Login form goes here -->
              <form action="process_login.php" method="post">
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" />
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" />
                </div>
              </form>
            </div>
            <div class="modal-footer d-flex">
              <button type="submit" class="btn btn-primary" onclick="validateForm()">Login</button>
              <div class="ms-auto align-middle">
                <p>
                  Don't have an account?<a
                    class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                    href="register.php">
                    Register now!</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      function onSignIn(googleUser) {
        var id_token = googleUser.getAuthResponse().id_token;
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "https://www.googleapis.com/oauth2/v3/tokeninfo?id_token=" + id_token);
        xhr.onload = function () {
          var user = JSON.parse(xhr.responseText);
          var formData = new FormData(document.getElementById("registrationForm"));
          formData.append("id_token", id_token);
          var xhr2 = new XMLHttpRequest();
          xhr2.open("POST", "YOUR_API_URL");
          xhr2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
          xhr2.send(formData);
        };
      }
      document.getElementById("registrationForm").addEventListener("submit", function (event) {
        event.preventDefault();
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "YOUR_API_URL");
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(formData);
      });
    </script>
  </body>
</html>

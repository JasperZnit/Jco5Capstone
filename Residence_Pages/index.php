<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/indexstyle.css">
</head>

<body>
  <div class="vh-100 d-flex align-items-center">
    <?php if (isset($_SESSION['signup_success'])) { ?>
      <div class="alert alert-success">
        <?php echo htmlspecialchars($_SESSION['signup_success']['message']); ?>
      </div>
      <?php unset($_SESSION['signup_success']); ?> <!-- Clear session variable -->
    <?php } ?>

    <div class="container">
      <div class="row">
        <div class="title col-lg-7">
          <h1>Welcome to BrgyHQ+</h1>
          <p>This is a web application designed to help barangays manage their records and communicate with their
            constituents.</p>
          <p>Join the digital revolution and experience a streamlined, efficient
            way to manage your barangay needs. Sign up today and discover the
            convenience of the BrgyHQ+!</p>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-8 col-xs-10 mx-auto">
          <div id="loginFrame" class="position-relative">
            <div id="signup" class="levelDown shadow bg-white card p-3">
              <h3 class="my-2 fw-bold">Signup</h3>
              <!--to connect add the URL-->
              <form action="signup_process.php" method="post" class='mx-3 my-3'>

                <div class="mb-3">
                  <label for="fullname">Full Name</label>
                  <input type="text" class="mt-2 form-control" id="fullname" name="fullname"
                    value="<?php echo (isset($_GET['fullname'])) ? $_GET['fullname'] : "" ?>">
                </div>
                <div class="mb-3">
                  <label for="email">Email</label>
                  <input type="email" class="mt-2 form-control" id="email" name="email"
                    value="<?php echo (isset($_GET['email'])) ? $_GET['email'] : "" ?>">
                </div>
                <div class="mb-4">
                  <label for="password">Password</label>
                  <div class="password-container mt-2 form-control">
                    <input type="password" class="mt-2" name="password" id="password" required>
                    <i id="togglePassword" class="bi bi-eye-slash"></i>
                  </div>
                </div>
                <div class="container mb-2">
                  <label class="fw-bold">Terms and Conditions</label>
                  <p>By creating an account, you agree to our <a href="terms.php">Terms and Conditions</a> and
                    <a href="privacy.php">Privacy Policy</a>.
                  </p>
                  <input type="checkbox" id="terms_and_conditions" name="terms_and_conditions" required>
                  <label for="terms_and_conditions">I agree to the terms and conditions</label>
                </div>
                <div class="mb-2">
                  <button class="btn btn-lg w-100" id="signupbtn">Signup</button>
                </div>
              </form>
            </div>

            <div id="login" class="levelUp shadow bg-white card p-3">
              <h3 class="my-2 fw-bold">Login</h3>
              <form action="login_process.php" method="post" class='mx-3 my-3'>
                <div class="mb-3">
                  <label for="email">Email</label>
                  <input type="email" class="mt-2 form-control" id="email" name="email"
                    value="<?php echo (isset($_GET['email'])) ? $_GET['email'] : "" ?>">
                </div>
                <div class="mb-2">
                  <label for="password">Password</label>
                  <div class="password-container mt-2 form-control">
                    <input type="password" class="mt-2" name="loginpassword" id="loginpassword" required>
                    <i id="logintogglePassword" class="bi bi-eye-slash"></i>
                  </div>
                </div>
                <div class="mb-2">
                  <input type="checkbox" class="me-2" for="rememeberMe"> <label for="rememberMe">Remember Me</label>
                </div>
                <div class="mb-2">
                  <button class="btn btn-lg w-100" id="loginbtn">Login</button>
                </div>
                <div class="mt-4 text-center">
                  <a href="forgetpassword.php">Forgot Password?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-light py-3 fixed-bottom">
    <div class="container text-center">
      <p>&copy; 2023 BrgyHQ+. All rights reserved.</p>
    </div>
  </footer>

  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>

</html>

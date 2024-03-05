<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./styleForForm.css" />
  </head>
  <body>
    <!--------------------Signin------------------------->

    <form id="signin-form" action="signin.php" method="post">
      <div class="close-button">
        <i class="fa fa-home" id="close-icon-signin"></i>
      </div>
      <div class="container">
      <div id="login-error" style="display: none; color: red;"></div>
        <h1>Sign In</h1>
        <p>Please enter your username and password.</p>
        <hr />
        <div class="input-field">
          <label for="username"><i class="fa-solid fa-user"></i></label>
          <input type="text" placeholder="Enter Username" name="username" id="username" required />
        </div>
        <div class="input-field">
          <label for="psw"><i class="fa-solid fa-lock"></i></label>
          <input type="password" placeholder="Enter Password" name="password" id="psw2" required />
          <img src="eye-close.png" id="eyeicon2" />
        </div>
        <hr />
        <div class="btn-field">
          <button type="submit" class="registerbtn">Sign In</button>
        </div>
      </div>
    </form>

    <script src="scriptForForm.js"></script>
    <script>
      fetch('signin.php', { /* ... your fetch options ... */})
    .then(response => {
      if (response.headers.get('X-Login-Error')) {
        document.getElementById('login-error').textContent = 'Invalid username or password.';
        document.getElementById('login-error').style.display = 'block'; 
      } else {
        // Handle successful login
      }
    });
    </script>
  </body>
</html>

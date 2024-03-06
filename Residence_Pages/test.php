<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <?php if (isset($_SESSION['signup_success']) && $_SESSION['signup_success'] === true): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Signup successful!</strong> You can now log in.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['signup_success']); ?>
    <?php endif; ?>
    <h3 class="my-2 fw-bold">Signup</h3>
    <!--to connect add the URL-->
    <form action="handler/test_process.php" method="post" class='mx-3 my-3'>

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

</body>

</html>
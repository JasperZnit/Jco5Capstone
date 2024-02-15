<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrgyHQ+</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar sticky-top bg-body-tertiary navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand mx-4" href="index.php">BrgyHQ+</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav mx-4">
                    <li class="nav-item">
                        <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login to BrgyHQ+</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Login form goes here -->
                    <form action="process_login.php" method="post"> 
                        <div class="p-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"> <!--insert value="<(--remove me-)?php echo (isset($_GET['username']))?$_GET['username']:""?>"-->
                        </div>
                        <div class="p-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex">
                    <div>                                        
                        <a href="home.php" type="button" class="text-white text-decoration-none ms-3 p-1 bg-primary border border-primary rounded">Login</a><!--insert onclick="validateForm()"-->
                    </div>
                    <div class="ms-auto me-3">
                        <p>Don't have an account?<a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="register.php"> Register now!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h1>Welcome to BrgyHQ+</h1>
        <p>This is a web application designed to help barangays manage their records and communicate with their constituents. With BrgyHQ+, you can easily access various services, such as registration, securing certificates, voting, and reporting, all in one place.</p>
        <br><br>
        <h3>Barangay life just got easier!</h3>
        <p>Introducing the BrgyHQ+, your one-stop platform for hassle-free barangay transactions. Tired of waiting in line? Now you can book appointments online for barangay certificates anytime, anywhere! No more rushing - choose a convenient slot that fits your schedule. 
        <br><br>
        Plus, ditch the paperwork! We offer secure online payments for various certificates, so you can skip the trip to the payment center. Pay seamlessly with your preferred method and get your documents faster. Our user-friendly system is designed with you in mind. Stay informed with barangay announcements and updates. 
        <br><br>
        Join the digital revolution and experience a streamlined, efficient way to manage your barangay needs. Sign up today and discover the convenience of the BrgyHQ+ !</p>
    </div>

    <footer class="bg-light py-3 fixed-bottom">
        <div class="container text-center">
            <p>&copy; 2023 BrgyHQ+. All rights reserved.</p>
        </div>
    </footer>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>
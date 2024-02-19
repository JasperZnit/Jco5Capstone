<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrgyHQ+</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);">

    <div class="vh-100 d-flex align-items-center">
        <div class="container">

            <div class="col-lg-5 col-md-6 col-sm-8 col-xs-10 mx-auto">

                <div id="forgetpassword" class="shadow bg-white card p-3">

                    <form action="" method="" onsubmit="" class='mx-3 my-3'>
                        <h3 class="my-2 fw-bold">Forget password?</h3>
                        <p>Please provide your BrgyHQ+ email address and we'll send you a link to reset your password.
                        </p>
                        <div class="mb-3">
                            <input type="email" class="mt-2 form-control" id="email" name="email"
                                placeholder="Email address" required>
                        </div>
                        <div class="d-flex">

                            <div class="py-1">
                                <button type="submit" class="btn btn-primary ms-2" onclick="">Submit</button>
                            </div>
                            <div class="ms-auto py-1">
                                <button class="btn btn-secondary me-2" id="cancelforgetpass"
                                    onclick="javascript:location.href='index.php';">Cancel</button>
                            </div>
                        </div>

                    </form>
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
    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>
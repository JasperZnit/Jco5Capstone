<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div>
<form action="login_action.php" method="POST">
    <h4>LOGIN</h4>
    <div class="mb-3">
    <label class="form-label">User Name</label>
    <input type="text" class="form-control" name="uname"> <!--value="<(--remove me-)?php echo (isset($_GET['uname']))?$_GET['uname']:""?>"-->
    </div>
    <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="pass">
    </div>
    <button type="submit" class="btn btn-primary">login</button>
    <a href="register.php"> Signup</a>
</form>
</div>

<!-- Add Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
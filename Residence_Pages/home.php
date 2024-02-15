
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Home</title>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <div class="container-fluid mx-4">
            <a class="navbar-brand" href="home.php">BrgyHQ+</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="certificate.php" target="myIframe">Certificates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="personaldetails.php" target="myIframe">Personal Details</a>
                    </li>
                </ul>
                
                <ul class="navbar-nav ms-auto align-items-center mx-2">
                    <div class="icon fw-bolder px-4 ">
                        <div class="p-2 fs-4 d-inline-block">
                            <i class="bi bi-bell-fill" type="button" target="myIframe"></i>
                        </div>
                        <div class="p-2 fs-2 d-inline-block">
                            <i class="bi bi-inbox" type="button" target="myIframe"></i>
                        </div>
                    </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fw-bolder fs-3 px-2"></i>
                        </a><!--insert <(--remove--me)?= htmlspecialchars($_SESSION['fname']) ?> -->
                        <ul class="dropdown-menu text-align-center" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="editprofile.php" target="myIframe"><i class="bi bi-person-fill-gear fs-4 mx-2"></i>Settings</a></li>
                            <li><a class="dropdown-item" href="index.php"><i class="bi bi-box-arrow-left fs-4 mx-2"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--iframe to display the rest of the tabs-->
    <div class="iframe">
        <iframe width="100%" height="900" name="myIframe" id="myIframe"></iframe>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>



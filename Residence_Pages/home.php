<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>BrgyHQ+ Home</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/homestyles.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>
  <!-- Responsive navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(10, 29, 86, 1)">
    <div class="container px-5">
      <a class="navbar-brand" href="home.php">BrgyHQ+</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="personaldetails.php">My Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <div class="nav-item d-flex align-items-center">
            <div class="fs-4 mx-1">
              <a class="nav-link" href="#"><i class="bi bi-bell-fill"></i></a>
            </div>
            <div class="fs-2 mx-1">
              <a class="nav-link" href=""><i class="bi bi-envelope"></i></a>
            </div>

            <!--<img src="<-?= 'profilepic/' . $_SESSION['profilepic'] ?>" alt="Profile Picture" height="30px" width="30px" class="rounded";-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle fw-bolder fs-3 px-2"></i>
              </a>
              <ul class="dropdown-menu text-align-center" aria-labelledby="navbarDropdownMenuLink">
                <div>
                  <?php if (isset($_SESSION['fullname'])) : ?>
                    <h6 class="mb-0 dropdown-header fs-6">Signed in as <?= $_SESSION['fullname'] ?></h6>
                  <?php else : ?>
                    <h6 class="mb-0 dropdown-header fs-6">Not signed in</h6>
                  <?php endif; ?>
                </div>
                <hr class="my-n2" />
                <li>            
                  <a class="dropdown-item" href="editprofile.php">     
                    <div class="flex align-items-center fs-5 px-3">
                      <i class="bi bi-person-fill-gear "></i>
                      <span class="text-truncate mx-2">Account Settings</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="index.php">
                    <div class="flex align-items-center fs-5 px-3">
                      <i class="bi bi-box-arrow-left "></i>
                      <span class="text-truncate mx-2">Logout</span>
                    </div>
                  </a>          
                </li>
              </ul>
            </li>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content-->
  <div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="barangay-hall-png-barangay-hall-clipart-3-650.png" alt="..." />
      </div>
      <div class="col-lg-5">
        <h1 class="font-weight-light">Introducing BrgyHQ+</h1>
        <p>
          Your one-stop platform for hassle-free barangay transactions.
          <br /><br />
          Ditch the paperwork! We offer secure online payments for various certificates, so you can
          skip the trip to the payment center.

          <br /><br />
          Pay seamlessly with your preferred method and get your documents
          faster. Our user-friendly system is designed with you in mind. Stay
          informed with barangay announcements and updates.
          <br />
        </p>
        <a class="btn" style="background-color: #37b5b6; color: #f2f597" href="#!">Newsletter</a>
      </div>
    </div>
    <!-- Call to Action-->
    <div class="card text-white my-5 py-4 text-center" style="background-color: #492e87;">
      <div class="card-body">
        <p class="text-white m-0">
          With BrgyHQ+, you can easily access various services, such as
          registration, securing certificates, voting, and reporting, all in
          one place.
        </p>
      </div>
    </div>
    <!-- Content Row-->
    <section id="services">
      <div class="p-4">
        <h1>Services</h1>
      </div>
      <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-5">
          <div class="card h-100 shadow" style="border-color: #492e87;">
            <div class="card-body">
              <h2 class="card-title">Barangay Certificate</h2>
              <p class="card-text">
                Tired of waiting in line? Now you can book appointments online
                for barangay certificates anytime, anywhere! No more rushing -
                choose a convenient slot that fits your schedule.
              </p>
            </div>
            <div class="card-footer">
              <a class="btn" style="background-color: #37b5b6; color: #f2f597" href="multistepsform.php">Apply</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title text-secondary">Barangay Clearance</h2>
              <p class="card-text text-secondary">
                We are still building this feature. Stay tuned for updates on
                the Barangay Clearance service!
              </p>
            </div>
            <div class="card-footer">
              <a class="btn disabled" style="background-color: #37b5b6; color: #f2f597" href="#!">Apply</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title text-secondary">Certificate of Indigency</h2>
              <p class="card-text text-secondary">
                We are still building this feature. Stay tuned for updates!
              </p>
            </div>
            <div class="card-footer">
              <a class="btn disabled" style="background-color: #37b5b6; color: #f2f597" href="#!">Apply</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>
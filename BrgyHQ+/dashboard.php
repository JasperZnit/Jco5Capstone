<?php
    session_start();

    if (!isset($_SESSION['user_id']) || !$_SESSION['username']) {
        header('Location: loginBRGYHQ+/index.php');
        exit();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="requestStyle.css" />
    <link rel="stylesheet" href="dashboard.css" />
    <link rel="stylesheet" href="profileTab.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'>
  </head>
  <body>
    <input type="checkbox" id="menu-toggle" />
    <div class="sidebar">
      <div class="side-header">
        <a href="dashboard.php"
          ><h3>BRGY<span>HQ+</span></h3></a
        >
      </div>

      <div class="side-content">
        <div class="profile">
          <div class="profile-img bg-img" style="background-image: url(img/4.png)"></div>
          <h4>Barangay Kimolong</h4>
          <small>Administrator</small>
        </div>

        <div class="side-menu">
          <ul>
            <li>
              <a href="dashboard.php" title="Dashboard">
                <span class="las la-home"></span>
                <small>Dashboard</small>
              </a>
            </li>
            <li>
              <a href="#content-profile" title="profile">
                <span class="las la-user-alt"></span>
                <small>Profile</small>
              </a>
            </li>
            <li>
              <a href="#content-request" title="Request">
                <span class="las la-scroll"></span>
                <small>Requests</small>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="main-content">
      <header>
        <div class="header-content">
          <label for="menu-toggle">
            <span class="las la-bars"></span>
          </label>

          <div class="header-menu">
            <div class="user">
              <div class="bg-img" style="background-image: url(img/4.png)" onclick="toggleMenu('ProfMenu')"></div>
            </div>
            <div class="mini-menu-wrap" id="ProfMenu">
              <div class="mini-menu">
                <div class="user-info">
                  <h3>Barangay Kimolong</h3>
                </div>
                <hr />
                <a href="loginBRGYHQ+/logout.php" class="mini-menu-link">
                  <i class="bi bi-box-arrow-left"></i>
                  <p>Logout</p>
                  <span> </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!------- content in each tab ------->
      <main>
        <div class="page-content content-section" id="content-dashboard">
          <div class="page-header">
            <h1>Dashboard</h1>
            <small>Home / Dashboard</small>
          </div>
          <div class="analytics d-flex justify-content-center">
            <div class="card w-50">
              <div class="card-head">
                <h2><?php include 'php/count_user.php'; echo $totalUsers; ?></h2>
                <span class="las la-user-friends"></span>
              </div>
              <div class="card-progress">
                <small>Over all users</small>
                <div class="card-indicator">
                  <div class="indicator one" style="width: <?php echo $percentage; ?>%"></div>
                </div>
              </div>
            </div>

            <div class="card w-50">
              <div class="card-head">
                <h2><?php include 'php/count_request.php'; echo $totalUsers; ?></h2>
                <span class="las la-scroll"></span>
              </div>
              <div class="card-progress">
                <small>Certificate Request</small>
                <div class="card-indicator">
                  <div class="indicator one" style="width: <?php echo $requestPercentage; ?>%"></div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!--Profile-->
        <div id="content-profile" class="content-section" style="display: none">
          <div class="page-header">
            <h1>Profile</h1>
            <small>Home / Profile</small>
          </div>
          <div class="row p-5 d-flex justify-content-center align-items-center">
            <div class="col-xl-8">
              <!-- Account details card-->
              <div class="card AcctDet mb-4">
                <div class="card-header">Account Details</div>
                <?php
            if (isset($_GET['error'])) {
                // Display error messages
                if ($_GET['error'] == 'passwordmismatch') {
                    echo "<p style='color: red;'>Passwords do not match.</p>";
                 } elseif ($_GET['error'] == 'wrongcurrent') {
                    echo "<p style='color: red;'>Incorrect current password.</p>";
                 } // Add more error cases as needed
            } 
        ?>
              <!-- Change password card-->
              <div class="card Chpass mb-4">
                  <form method="post" action="change_password_process.php">
                      <div class="mb-3">
                        <label class="small mb-1" for="currentPassword">Current Password</label>
                        <input class="form-control" id="current_password" name="current_password" type="password" placeholder="Enter current password">
                      </div>
                      <!-- Form Group (current password)-->
                      <div class="mb-3">
                        <label class="small mb-1" for="currentPassword">New Password</label>
                        <input class="form-control" id="new_password" name="new_password" type="password" placeholder="new password">
                      </div>
                      <!-- Form Group (new password)-->
                      <div class="mb-3">
                        <label class="small mb-1" for="newPassword">Confirm New Password</label>
                        <input class="form-control" id="confirm_password" name="confirm_password" type="password" placeholder="Confirm new password">
                      </div>
                      <!-- Form Group (confirm password)-->
                      <input type="submit" value="Change Password">
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div id="content-request" class="content-section" style="display: none">
          <div class="page-header">
            <h1>Requests</h1>
            <small>Home / Request</small>
          </div>

          <div class="records table-responsive">

            <div>
              <table width="100%">
                <thead>
                  <tr>
                    <th>#</th>
                    <th><span class="las la-sort"></span> USERS</th>
                    <th><span class="las la-sort"></span> PURPOSE</th>
                    <th><span class="las la-sort"></span> DATE FILED</th>
                    <th><span class="las la-sort"></span> PAYMENT STATUS</th>
                    <th><span class="las la-sort"></span> ACTIONS</th>
                  </tr>
                </thead>
                <tbody id="requestTableBody"></tbody>
              </table>
            </div>
          </div>
        </div>

        <div id="content-validate" class="content-section" style="display: none">
          <div class="page-header">
            <h1>Validate</h1>
            <small>Home / Validate</small>
          </div>
          <h1>validate</h1>
        </div>
      </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="scriptReq.js"></script>
    <script src="script.js"></script>
    <script src="profileTabScript.js"></script>
  </body>
</html>

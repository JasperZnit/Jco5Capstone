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
          <div class="profile-img bg-img" style="background-image: url(img/1.jpeg)"></div>
          <h4>Jasper Senit</h4>
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
            <li>
              <a href="#content-validate" title="Validate">
                <span class="las la-id-card"></span>
                <small>Validate</small>
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
            <div class="notify-icon">
              <span class="las la-envelope" onclick="toggleMenu('MessageMenu')"></span>
              <span class="notify">4</span>
              <div class="mini-menu-wrap" id="MessageMenu">
                <div class="mini-menu">
                  <div class="">
                    <h3>Messages</h3>
                  </div>
                  <hr />
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>

            <div class="notify-icon">
              <span class="las la-bell" onclick="toggleMenu('NotifMenu')"></span>
              <span class="notify">3</span>
              <div class="mini-menu-wrap" id="NotifMenu">
                <div class="mini-menu">
                  <div class="">
                    <h3>Notifications</h3>
                  </div>
                  <hr />
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>

            <div class="user">
              <div class="bg-img" style="background-image: url(img/1.jpeg)" onclick="toggleMenu('ProfMenu')"></div>
            </div>
            <div class="mini-menu-wrap" id="ProfMenu">
              <div class="mini-menu">
                <div class="user-info">
                  <h3>Jasper Senit</h3>
                </div>
                <hr />
                <a href="#" class="mini-menu-link">
                  <i class="bi bi-pencil-square"></i>
                  <p>Edit Profile</p>
                  <span> </span>
                </a>

                <a href="#" class="mini-menu-link">
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
          <div class="analytics">
            <div class="card">
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

            <div class="card">
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

            <div class="card">
              <div class="card-head">
                <h2><?php include 'php/count_validated_users.php'; echo $totalValidatedUsers; ?></h2>
                <span><i class="validCard las la-id-card"></i></span>
              </div>
              <div class="card-progress">
                <small>Validated users</small>
                <div class="card-indicator">
                  <div class="indicator one" style="width: <?php echo $validatedPercentage; ?>%"></div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-head">
                <h2><?php include 'php/count_email.php'; echo $totalUsers; ?></h2>
                <span class="las la-envelope"></span>
              </div>
              <div class="card-progress">
                <small>New E-mails received</small>
                <div class="card-indicator">
                  <div class="indicator one" style="width: <?php echo $emailPercentage; ?>%"></div>
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
          <div class="row p-5">
            <div class="col-xl-4">
              <!-- Profile picture card-->
              <div class="card PPcard mb-4 mb-xl-0">
                <div class="card-header PPheader">Profile Picture</div>
                <div class="card-body text-center">
                  <!-- Profile picture image-- img-account-profile rounded-circle mb-2-->
                  <img class="img-account-profile mb-2" src="barangay-hall-png-barangay-hall-clipart-3-650.png" alt="">
                  <!-- Profile picture help block-->
                  <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                  <!-- Profile picture upload button-->
                  <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
              </div>
            </div>
            <div class="col-xl-8">
              <!-- Account details card-->
              <div class="card AcctDet mb-4">
                <div class="card-header">Account Details</div>
                  <div class="card-body">
                    <form>
                      <!-- Form Group (username)-->
                      <div class="mb-3">
                        <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                        <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
                      </div>
                      <!-- Given name-->
                      <div class="row gx-3 mb-3">
                        <!-- Form Group (first name)-->
                        <div class="col-md-6">
                          <label class="small mb-1" for="inputFirstName">First name</label>
                          <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="col-md-6">
                          <label class="small mb-1" for="inputLastName">Last name</label>
                          <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                        </div>
                      </div>
                      <!-- Organization name & Location-->
                      <div class="row gx-3 mb-3">
                        <!-- Form Group (organization name)-->
                        <div class="col-md-6">
                          <label class="small mb-1" for="inputOrgName">Organization name</label>
                          <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
                        </div>
                        <!-- Form Group (location)-->
                        <div class="col-md-6">
                          <label class="small mb-1" for="inputLocation">Location</label>
                          <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                        </div>
                      </div>
                      <!-- Form Group (email address)-->
                      <div class="mb-3">
                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                      </div>
                      <!-- Contact & Bday-->
                      <div class="row gx-3 mb-3">
                        <!-- Form Group (phone number)-->
                        <div class="col-md-6">
                          <label class="small mb-1" for="inputPhone">Phone number</label>
                          <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                        </div>
                        <!-- Form Group (birthday)-->
                        <div class="col-md-6">
                          <label class="small mb-1" for="inputBirthday">Birthday</label>
                          <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                        </div>
                      </div>
                      <!-- Save changes button-->
                      <button class="btn btn-primary" type="button">Save</button>
                    </form>
                  </div>
              </div>
                                    
              <!-- Change password card-->
              <div class="card Chpass mb-4">
                <div class="card-header">Change Password</div>
                <div class="card-body">
                  <form>
                      <!-- Form Group (current password)-->
                      <div class="mb-3">
                        <label class="small mb-1" for="currentPassword">Current Password</label>
                        <input class="form-control" id="currentPassword" type="password" placeholder="Enter current password">
                      </div>
                      <!-- Form Group (new password)-->
                      <div class="mb-3">
                        <label class="small mb-1" for="newPassword">New Password</label>
                        <input class="form-control" id="newPassword" type="password" placeholder="Enter new password">
                      </div>
                      <!-- Form Group (confirm password)-->
                      <div class="mb-3">
                        <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                        <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm new password">
                      </div>
                      <button class="btn btn-primary" type="button">Save</button>
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
            <div class="record-header">
              <div class="add">
                <span>Entries</span>
                <select name="" id="">
                  <option value="">ID</option>
                </select>
                <button>Add record</button>
              </div>

              <div class="browse">
                <input type="search" placeholder="Search" class="record-search" />
                <select name="" id="">
                  <option value="">Status</option>
                </select>
              </div>
            </div>

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

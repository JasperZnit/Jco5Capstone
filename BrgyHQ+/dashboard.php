<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="requestStyle.css" />
    <link rel="stylesheet" href="dashboard.css" />
    <link rel="stylesheet" href="profileTab.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
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
              <a href="#content-mailbox" title="Mailbox">
                <span class="las la-envelope"></span>
                <small>Mailbox</small>
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
            <li>
              <a href="#content-records" title="Records">
                <span class="las la-folder-open"></span>
                <small>Records</small>
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
                  <img src="img/profile.png" />
                  <p>Edit Profile</p>
                  <span> </span>
                </a>

                <a href="#" class="mini-menu-link">
                  <img src="img/logout.png" />
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
                <h2>35</h2>
                <span class="las la-scroll"></span>
              </div>
              <div class="card-progress">
                <small>Certificate Request</small>
                <div class="card-indicator">
                  <div class="indicator two" style="width: 1%"></div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-head">
                <h2>200</h2>
                <span><i class="validCard las la-id-card"></i></span>
              </div>
              <div class="card-progress">
                <small>Validated users</small>
                <div class="card-indicator">
                  <div class="indicator three" style="width: 65%"></div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-head">
                <h2>120</h2>
                <span class="las la-envelope"></span>
              </div>
              <div class="card-progress">
                <small>New E-mails received</small>
                <div class="card-indicator">
                  <div class="indicator four" style="width: 90%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="content-profile" class="content-section" style="display: none">
          <div class="page-header">
            <h1>Dashboard</h1>
            <small>Home / Profile</small>
          </div>
          <div class="profile-container">
        <img src="user.jpg" alt="Profile Picture" class="profile-picture" id="profile-picture-input">
        <input type="file" id="profile-picture-file" style="display: none;">
        <h5>System Profile</h5>
            <div class="profile-form-field">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Barangay Kimolong">
            </div>
            <div class="profile-form-field">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Kimolong@gmail.com">
            </div>
            <div class="profile-form-field">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="profile-form-field">
                <label for="contact">Contact Number:</label>
                <input type="tel" id="contact" name="contact" placeholder="0912345678">
            </div>
    </div>
        </div>

        <div id="content-mailbox" class="content-section" style="display: none">
          <div class="page-header">
            <h1>Mailbox</h1>
            <small>Home / Mailbox</small>
          </div>
          <h1>Mailbox</h1>
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

        <div id="content-records" class="content-section" style="display: none">
          <div class="page-header">
            <h1>Records</h1>
            <small>Home / Records</small>
          </div>
          <h1>Records</h1>
        </div>
      </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
    <script src="scriptReq.js"></script>
    <script src="script.js"></script>
    <script src="profileTabScript.js"></script>
  </body>
</html>

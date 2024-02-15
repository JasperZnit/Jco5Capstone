<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="requestStyle.css" />
    <link rel="stylesheet" href="dashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
  </head>
  <body>
    <input type="checkbox" id="menu-toggle" />
    <div class="sidebar">
      <div class="side-header">
        <h3>BRGY<span>HQ+</span></h3>
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
              <a href="#content-dashboard" title="Dashboard">
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
            <label for="">
              <span class="las la-search"></span>
            </label>

            <div class="notify-icon">
              <span class="las la-envelope"></span>
              <span class="notify">4</span>
            </div>

            <div class="notify-icon">
              <span class="las la-bell"></span>
              <span class="notify">3</span>
            </div>

            <div class="user">
              <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>

              <span class="las la-power-off"></span>
              <span>Logout</span>
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
                <h2>576</h2>
                <span class="las la-user-friends"></span>
              </div>
              <div class="card-progress">
                <small>Over all users</small>
                <div class="card-indicator">
                  <div class="indicator one" style="width: 60%"></div>
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
                  <div class="indicator two" style="width: 80%"></div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-head">
                <h2>200</h2>
                <span><i class="las la-id-card"></i></span>
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
                    <th><span class="las la-sort"></span> BARANGAY</th>
                    <th><span class="las la-sort"></span> REGISTRATION DATE</th>
                    <th><span class="las la-sort"></span> STATUS</th>
                    <th><span class="las la-sort"></span> ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#5033</td>
                    <td>
                      <div class="client">
                        <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                        <div class="client-info">
                          <h4>Andrew Bruno</h4>
                          <small>Joel@gmail.com</small>
                        </div>
                      </div>
                    </td>
                    <td>Poblacion</td>
                    <td>19 April, 2022</td>
                    <td>
                      <span class="no">Not Validated</span>
                    </td>
                    <td>
                      <div class="actions">
                        <span class="lab la-telegram-plane"></span>
                        <span class="las la-eye"></span>
                        <span class="las la-ellipsis-v"></span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>#5033</td>
                    <td>
                      <div class="client">
                        <div class="client-img bg-img" style="background-image: url(img/1.jpeg)"></div>
                        <div class="client-info">
                          <h4>Exty Bruno</h4>
                          <small>Joel@gmail.com</small>
                        </div>
                      </div>
                    </td>
                    <td>Poblacion</td>
                    <td>19 April, 2022</td>
                    <td>
                      <span class="yes">Validated</span>
                    </td>
                    <td>
                      <div class="actions">
                        <span class="lab la-telegram-plane"></span>
                        <span class="las la-eye"></span>
                        <span class="las la-ellipsis-v"></span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>#5033</td>
                    <td>
                      <div class="client">
                        <div class="client-img bg-img" style="background-image: url(img/1.jpeg)"></div>
                        <div class="client-info">
                          <h4>Exty Bruno</h4>
                          <small>Joel@gmail.com</small>
                        </div>
                      </div>
                    </td>
                    <td>Poblacion</td>
                    <td>19 April, 2022</td>
                    <td>
                      <span class="no">Not Validated</span>
                    </td>
                    <td>
                      <div class="actions">
                        <span class="lab la-telegram-plane"></span>
                        <span class="las la-eye"></span>
                        <span class="las la-ellipsis-v"></span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>#5033</td>
                    <td>
                      <div class="client">
                        <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                        <div class="client-info">
                          <h4>Andrew Bruno</h4>
                          <small>Joel@gmail.com</small>
                        </div>
                      </div>
                    </td>
                    <td>Poblacion</td>
                    <td>19 April, 2022</td>
                    <td>
                      <span class="no">Not Validated</span>
                    </td>
                    <td>
                      <div class="actions">
                        <span class="lab la-telegram-plane"></span>
                        <span class="las la-eye"></span>
                        <span class="las la-ellipsis-v"></span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div id="content-profile" class="content-section" style="display: none">
          <div class="page-header">
            <h1>Dashboard</h1>
            <small>Home / Profile</small>
          </div>
          <h1>profile</h1>
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
  </body>
</html>

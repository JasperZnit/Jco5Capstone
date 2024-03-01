<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="requestStyle.css"/>
    <link rel="stylesheet" href="dashboard.css"/>
    <link rel="stylesheet" href="profileTab.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'>
  </head>
  <body>
    <input type="checkbox" id="menu-toggle"/>
    <!--Side bar-->
    <div class="sidebar">

      <!--Logo-->  
      <div class="side-header">
        <a href="dashboard.php"><h3>BRGY<span>HQ+</span></h3></a>
      </div>

      <!--Side bar content-->
      <div class="side-content">

        <!--Profile Photo-->
        <div class="profile">
          <div class="profile-img bg-img" style="background-image: url(img/1.jpeg)"></div>
          <h4>Jasper Senit</h4>
          <small>Administrator</small>
        </div>

        <!--Side bar menu-->
        <div class="side-menu">
          <ul>
            <!--Dashboard-->
            <li>
              <a href="dashboard.php" title="Dashboard">
                <span class="las la-home"></span>
                <small>Dashboard</small>
              </a>
            </li>
            <!--Profile-->
            <li>
              <a href="#content-profile" title="profile">
                <span class="las la-user-alt"></span>
                <small>Profile</small>
              </a>
            </li>
            <!--Mailbox-->
            <li>
              <a href="#content-mailbox" title="Mailbox">
                <span class="las la-envelope"></span>
                <small>Mailbox</small>
              </a>
            </li>
            <!--Requests-->
            <li>
              <a href="#content-request" title="Request">
                <span class="las la-scroll"></span>
                <small>Requests</small>
              </a>
            </li>
            <!--Validate-->
            <li>
              <a href="#content-validate" title="Validate">
                <span class="las la-id-card"></span>
                <small>Validate</small>
              </a>
            </li>
            <!--Reocrds-->
            <li>
              <a href="#content-records-requests" title="Records" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseRecords" aria-expanded="false" aria-controls="collapseRecords">
                <span class="las la-folder-open"></span>
                <small>Records</small>
              </a>

            </li>
          </ul>
        </div>

      </div>

    </div>

    <!--Main content-->
    <div class="main-content">
      <!--Header-->
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
        <!--Dashboard-->
        <div class="page-content content-section" id="content-dashboard">
          <div class="page-header">
            <h1>Dashboard</h1>
            <small>Home / Dashboard</small>
          </div>
          <div class="analytics">
            <!--Over all users-->
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

            <!--Certificate Requests-->
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

            <!--Validated Users-->
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

            <!--New email receive-->
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

        <!--Mailbox-->
        <div id="content-mailbox" class="content-section" style="display: none">
          <div class="page-header">
            <h1>Mailbox</h1>
            <small>Home / Mailbox</small>
          </div>

          <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body bg-secondary text-white mailbox-widget pb-0">
                        <ul class="nav nav-tabs custom-tab border-bottom-0 mt-4" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="inbox-tab" data-toggle="tab" aria-controls="inbox" href="#inbox" role="tab" aria-selected="true">
                                    <span class="d-block d-md-none"><i class="ti-email"></i></span>
                                    <span class="d-none d-md-block"> INBOX</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sent-tab" data-toggle="tab" aria-controls="sent" href="#sent" role="tab" aria-selected="false">
                                    <span class="d-block d-md-none"><i class="ti-export"></i></span>
                                    <span class="d-none d-md-block">SENT</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="spam-tab" data-toggle="tab" aria-controls="spam" href="#spam" role="tab" aria-selected="false">
                                    <span class="d-block d-md-none"><i class="ti-panel"></i></span>
                                    <span class="d-none d-md-block">SPAM</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="delete-tab" data-toggle="tab" aria-controls="delete" href="#delete" role="tab" aria-selected="false">
                                    <span class="d-block d-md-none"><i class="ti-trash"></i></span>
                                    <span class="d-none d-md-block">DELETED</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                            <div>
                                <div class="row p-4 no-gutters align-items-center">
                                    <div class="col-sm-12 col-md-6">
                                        <h3 class="font-light mb-0"><i class="ti-email mr-2"></i>350 Unread emails</h3>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <ul class="list-inline dl mb-0 float-left float-md-right">
                                            <li class="list-inline-item text-info mr-3">
                                                <a href="#">
                                                    <button class="btn btn-circle btn-success" href="javascript:void(0)">
                                                      <i class="fa fa-plus text-white"></i>
                                                    </button>
                                                    <span class="ml-2 font-normal text-dark">Compose</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item text-danger">
                                                <a href="#">
                                                    <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                      <i class="fa fa-trash text-white"></i>
                                                    </button>
                                                    <span class="ml-2 font-normal text-dark">Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Mail list-->
                                <div class="table-responsive">
                                    <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                        <tbody>
                                            <!-- row -->
                                            <tr>
                                                <!-- label -->
                                                <td class="pl-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cst1" />
                                                        <label class="custom-control-label" for="cst1">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <!-- star -->
                                                <td><i class="fa fa-star text-warning"></i></td>
                                                <td>
                                                    <span class="mb-0 text-muted">Hritik Roshan</span>
                                                </td>
                                                <!-- Message -->
                                                <td>
                                                    <a class="link" href="javascript: void(0)">
                                                        <span class="badge badge-pill text-white font-medium badge-danger mr-2">Work</span>
                                                        <span class="text-dark">Lorem ipsum perspiciatis-</span>
                                                    </a>
                                                </td>
                                                <!-- Attachment -->
                                                <td><i class="fa fa-paperclip text-muted"></i></td>
                                                <!-- Time -->
                                                <td class="text-muted">May 13</td>
                                            </tr>
                                            <!-- row -->
                                            <tr>
                                                <!-- label -->
                                                <td class="pl-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cst2" />
                                                        <label class="custom-control-label" for="cst2">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <!-- star -->
                                                <td><i class="fa fa-star"></i></td>
                                                <!-- User -->
                                                <td>
                                                    <span class="mb-0 text-muted">Genelia Roshan</span>
                                                </td>
                                                <!-- Message -->
                                                <td>
                                                    <a class="link" href="javascript: void(0)">
                                                        <span class="badge badge-pill text-white font-medium badge-info mr-2">Business</span>
                                                        <span class="text-dark">Inquiry about license for Admin </span>
                                                    </a>
                                                </td>
                                                <!-- Attachment -->
                                                <td><i class="fa fa-paperclip text-muted"></i></td>
                                                <!-- Time -->
                                                <td class="text-muted">May 13</td>
                                            </tr>
                                            <!-- row -->
                                            <tr>
                                                <!-- label -->
                                                <td class="pl-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cst3" />
                                                        <label class="custom-control-label" for="cst3">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <!-- star -->
                                                <td><i class="fa fa-star text-warning"></i></td>
                                                <!-- User -->
                                                <td class="user-name max-texts">
                                                    <span class="mb-0 text-muted font-light">Ritesh Deshmukh</span>
                                                </td>
                                                <!-- Message -->
                                                <td>
                                                    <a class="link" href="javascript: void(0)">
                                                        <span class="badge badge-pill text-white font-medium badge-warning mr-2">Friend</span>
                                                        <span class="font-light text-dark">Bitbucket (commit Pushed) by Ritesh</span>
                                                    </a>
                                                </td>
                                                <!-- Attachment -->
                                                <td><i class="fa fa-paperclip text-muted"></i></td>
                                                <!-- Time -->
                                                <td class="text-muted font-light">May 13</td>
                                            </tr>
                                            <!-- row -->
                                            <tr class="">
                                                <!-- label -->
                                                <td class="pl-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cst4" />
                                                        <label class="custom-control-label" for="cst4">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <!-- star -->
                                                <td><i class="fa fa-star"></i></td>
                                                <!-- User -->
                                                <td>
                                                    <span class="mb-0 text-muted font-light">Akshay Kumar</span>
                                                </td>
                                                <!-- Message -->
                                                <td>
                                                    <a class="link" href="javascript: void(0)">
                                                        <span class="badge badge-pill text-white font-medium badge-info mr-2">Work</span><span class="font-light text-dark">Perspiciatis unde omnis- iste Lorem ipsum</span>
                                                    </a>
                                                </td>
                                                <!-- Attachment -->
                                                <td><i class="fa fa-paperclip text-muted"></i></td>
                                                <!-- Time -->
                                                <td class="text-muted font-light">May 9</td>
                                            </tr>
                                            <!-- row -->
                                            <tr class="">
                                                <!-- label -->
                                                <td class="pl-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cst5" />
                                                        <label class="custom-control-label" for="cst5">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <!-- star -->
                                                <td><i class="fa fa-star"></i></td>
                                                <!-- User -->
                                                <td>
                                                    <span class="mb-0 text-muted font-light">John Abraham</span>
                                                </td>
                                                <!-- Message -->
                                                <td>
                                                    <a class="link" href="javascript: void(0)">
                                                        <span class="badge badge-pill text-white font-medium badge-success mr-2">Work</span> <span class="font-light text-dark">Lorem ipsum perspiciatis- unde omnis</span>
                                                    </a>
                                                </td>
                                                <!-- Attachment -->
                                                <td><i class="fa fa-paperclip text-muted"></i></td>
                                                <!-- Time -->
                                                <td class="text-muted font-light">Mar 10</td>
                                            </tr>
                                            <!-- row -->
                                            <tr class="">
                                                <!-- label -->
                                                <td class="pl-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cst6" />
                                                        <label class="custom-control-label" for="cst6">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <!-- star -->
                                                <td><i class="fa fa-star text-warning"></i></td>
                                                <!-- User -->
                                                <td>
                                                    <span class="mb-0 text-muted font-light">Akshay Kumar</span>
                                                </td>
                                                <!-- Message -->
                                                <td>
                                                    <a class="link" href="javascript: void(0)">
                                                        <span class="badge badge-pill text-white font-medium badge-success mr-2">Work</span> <span class="font-light text-dark">Lorem ipsum perspiciatis - unde</span>
                                                    </a>
                                                </td>
                                                <!-- Attachment -->
                                                <td><i class="fa fa-paperclip text-muted"></i></td>
                                                <!-- Time -->
                                                <td class="text-muted font-light">Mar 09</td>
                                            </tr>
                                            <!-- row -->
                                            <tr class="">
                                                <!-- label -->
                                                <td class="pl-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cst7" />
                                                        <label class="custom-control-label" for="cst7">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <!-- star -->
                                                <td><i class="fa fa-star text-warning"></i></td>
                                                <!-- User -->
                                                <td>
                                                    <span class="mb-0 text-muted font-light">Hanna Gover</span>
                                                </td>
                                                <!-- Message -->
                                                <td>
                                                    <a class="link" href="javascript: void(0)">
                                                        <span class="badge badge-pill text-white font-medium badge-danger mr-2">Work</span><span class="font-light text-dark"> Unde omnis Lorem ipsum perspiciatis</span>
                                                    </a>
                                                </td>
                                                <!-- Attachment -->
                                                <td><i class="fa fa-paperclip text-muted"></i></td>
                                                <!-- Time -->
                                                <td class="text-muted font-light">Mar 09</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sent" aria-labelledby="sent-tab" role="tabpanel">
                            <div class="row p-3 text-dark">
                                <div class="col-md-6">
                                    <h3 class="font-light">Lets check profile</h3>
                                    <h4 class="font-light">you can use it with the small code</h4>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="spam" aria-labelledby="spam-tab" role="tabpanel">
                            <div class="row p-3 text-dark">
                                <div class="col-md-6">
                                    <h3 class="font-light">Come on you have a lot message</h3>
                                    <h4 class="font-light">you can use it with the small code</h4>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="delete" aria-labelledby="delete-tab" role="tabpanel">
                            <div class="row p-3 text-dark">
                                <div class="col-md-6">
                                    <h3 class="font-light">Just do Settings</h3>
                                    <h4 class="font-light">you can use it with the small code</h4>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
          
        </div>

        <!--Requests-->
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

        <!--Validates-->
        <div id="content-validate" class="content-section" style="display: none">
          <div class="page-header">
            <h1>Validate</h1>
            <small>Home / Validate</small>
          </div>
          <div class="records table-responsive">
            <div class="record-header">
              <div class="add">
                <span>Filter</span>
                <select name="" id="">
                  <option value="">Validation ID</option>
                  <option value="">Date Filed</option>
                  <option value="">Name</option>
                  <option value="">Remarks</option>
                  <option value="">Status</option>
                </select>
              </div>

              <div class="browse">
                <input type="search" placeholder="Search" class="record-search"/>
              </div>
            </div>

            <div>
              <table width="100%">
                <thead>
                  <tr>
                    <th>Validation ID</th>
                    <th><span class="las la-sort"></span> Date Filed</th>
                    <th><span class="las la-sort"></span> Name</th>
                    <th><span class="las la-sort"></span> Remarks</th>
                    <th><span class="las la-sort"></span> Status</th>
                    <th><span class="las la-sort"></span> Action</th>
                  </tr>
                </thead>
                <tbody id="requestTableBody"></tbody>
              </table>
            </div>
          </div>
        </div>

        <!--Records-->
        <div id="content-records-requests" class="content-section" style="display: none">
          <div class="page-header">
            <h1>Completed Requests</h1>
            <small>Home / Records</small>
          </div>
          
          <div class="records table-responsive">
            <div class="record-header">
              <div class="add">
                <span>Filter</span>
                <select name="" id="">
                  <option value="">Reference #</option>
                  <option value="">Name</option>
                  <option value="">Purpose</option>
                  <option value="">Status</option>
                  <option value="">Payment</option>
                </select>
              </div>

              <div class="browse">
                <input type="search" placeholder="Search" class="record-search"/>
              </div>
            </div>

            <div>
              <table width="100%">
                <thead>
                  <tr>
                    <th>Reference #</th>
                    <th><span class="las la-sort"></span> Date Filed</th>
                    <th><span class="las la-sort"></span> Name</th>
                    <th><span class="las la-sort"></span> Purpose</th>
                    <th><span class="las la-sort"></span> Status</th>
                    <th><span class="las la-sort"></span> Payment</th>
                    <th><span class="las la-sort"></span> Action</th>
                  </tr>
                </thead>
                <tbody id="requestTableBody"></tbody>
              </table>
            </div>
          </div>
          
        </div>

      </main>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>    
    <script src="scriptReq.js"></script>
    <script src="script.js"></script>
    <script src="profileTabScript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js'></script>
    
  </body>
</html>

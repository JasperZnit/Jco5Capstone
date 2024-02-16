<?php
require_once "connection.php";       
		$id = $_REQUEST['read_id']; 
		$select_stmt = $db->prepare('SELECT * FROM student_file WHERE id = :id'); 
		$select_stmt->bindParam(':id',$id);
		$select_stmt->execute(); 
		$row = $select_stmt->fetch(PDO::FETCH_ASSOC)
		
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <title>Profile</title>
    <link rel="stylesheet" href="requestStyle.css" />
    <link rel="stylesheet" href="dashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <style>
button{
  background-color: #5cb85c;
  border: none;
  color: #fff;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}

button a{
  color: #fff;
  text-decoration: none; }
      
      
    </style>
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
            <input type="text" class="search-box" placeholder="Search...">
            <label for="">
              <span class="las la-search"></span>
            </label>

            <div class="notify-icon">
              <span class="las la-envelope" onclick="toggleMenu('MessageMenu')"></span>
              <span class="notify">4</span>
              <div class="mini-menu-wrap" id="MessageMenu">
                <div class="mini-menu">
                    <div class="">
                      <h3>Messages</h1>
                    </div>
                    <hr>
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
                      <h3>Notifications</h1>
                    </div>
                    <hr>
                    <span></span>
                    <span></span>
                </div>
              </div>
            </div>

            <div class="user">
              <div class="bg-img" style="background-image: url(img/1.jpeg)" onclick="toggleMenu('ProfMenu')"></div>

              <span class="las la-power-off"></span>
              <span>Logout</span>
            </div>
            <div class="mini-menu-wrap" id="ProfMenu">
              <div class="mini-menu">
                <div class="user-info">
                  <h3> Jasper Senit </h3>
              </div>
                  <hr>
                  <a href="#" class="mini-menu-link">
                    <img src="img/profile.png">
                    <p>Edit Profile</p>
                    <span>  </span>
                </a>

                <a href="#" class="mini-menu-link">
                    <img src="img/setting.png">
                    <p>Settings and Privacy</p>
                    <span> </span>
                </a>

                <a href="#" class="mini-menu-link">
                    <img src="img/help.png">
                    <p>Help & Support</p>
                    <span>  </span>
                </a>

                <a href="#" class="mini-menu-link">
                    <img src="img/logout.png">
                    <p>Logout</p>
                    <span>  </span>
                </a>
                  
              </div>
            </div>
          </div>
        </div>
      </header>
      <!------- content in each tab ------->
      <main>
      <table width="100%">
      <div class="page-header">
            <h1>Profile</h1>
            <small>All Profiles</small>
          </div>
        <div class="container-fluid" style="text-align: center;">
					<div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static"><?php echo $row['name']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <p class="form-control-static"><img src="upload/<?php echo $row['image']; ?>" width="110px" height="120px"></p>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <p class="form-control-static"><?php echo $row['icnum']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Telephone Number</label>
                        <p class="form-control-static"><?php echo $row['telno']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <p class="form-control-static"><?php echo $row['gender']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Religion</label>
                        <p class="form-control-static"><?php echo $row['class']; ?></p>
                    </div>

                    <div class="form-group">
                        <label>Father Name</label>
                        <p class="form-control-static"><?php echo $row['fname']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Father IC Number</label>
                        <p class="form-control-static"><?php echo $row['ficnum']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Mother Name</label>
                        <p class="form-control-static"><?php echo $row['mname']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Mother IC Number</label>
                        <p class="form-control-static"><?php echo $row['micnum']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Emergency Contact Name</label>
                        <p class="form-control-static"><?php echo $row['ename']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Relationship</label>
                        <p class="form-control-static"><?php echo $row['erel']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Emergency Contact Number</label>
                        <p class="form-control-static"><?php echo $row['etelno']; ?></p>
                    </div>
                    
                    <button><a href="index.php" class="btn btn-primary">Back</a></button>
      </div>
        </table>
      </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="scriptReq.js"></script>
    <script src="script.js"></script>
  </body>
</html>


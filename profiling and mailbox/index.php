<?php

	require_once "connection.php";
	
	if(isset($_REQUEST['delete_id']))
	{
		
		$id=$_REQUEST['delete_id'];
		
		$id=$_REQUEST['delete_id'];	
		
		$select_stmt= $db->prepare('SELECT * FROM student_file WHERE id =:id');	
		$select_stmt->bindParam(':id',$id);
		$select_stmt->execute();
		$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
		unlink("upload/".$row['image']); 
		
		
		$delete_stmt = $db->prepare('DELETE FROM student_file WHERE id =:id');
		$delete_stmt->bindParam(':id',$id);
		$delete_stmt->execute();
		
		header("Location:index.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Profile</title>
		
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="requestStyle.css" />
<link rel="stylesheet" href="dashboard.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
		
</head>
<style>
 

</style>
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
            <thead>
                  <tr>    
                    <th></span> Name</th>
                    <th> Number</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
									$select_stmt=$db->prepare("SELECT * FROM student_file");	
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                    <tr>
                     <td><?php echo $row['name']; ?></td>
                     <td><?php echo $row['icnum']; ?></td>
                     <td><?php echo $row['icnum']; ?></td>
                                            
                      
                     <td> 
                      <a href="read.php?read_id=<?php echo $row['id']; ?>"title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                      <a href="edit.php?update_id=<?php echo $row['id']; ?>"title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a> 
                      <a href="?delete_id=<?php echo $row['id']; ?>" title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                    </td>
                      </tr>
                  <?php
                  
									}
									?>
                  </tbody>
          </div>   
        </table>
                  <div style="text-align: end;">
                    <button><a href="add.php">Add Profile</a></button>
                    <button><a class="active" href="index.php">Profile List</a></button>
                </div>
      </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="scriptReq.js"></script>
    <script src="script.js"></script>
  </body>
  
</html>
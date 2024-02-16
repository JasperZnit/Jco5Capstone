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
    <style>
      * {font-family: Arial, sans-serif;}
      table{ border-collapse: collapse; }
      td{ padding: 20px; 
        background-color: white;} 
      th {
         text-align: start;
         
      }
      table {
  border-collapse: collapse;
}
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
            <h1>Mailbox</h1>
            <small>Home / Mailbox</small>
          </div>
                <thead>
                  <tr>
                    <th><span ></span> FROM</th>
                    <th><span ></span> SUBJECT</th>
                    <th><span ></span> DATE </th>
                  </tr>
                  <?php
      $scriptUrl = "https://script.google.com/macros/s/AKfycbzefL1bBCu1Cd93HRkhAeGF-e0z9qNVq4lWeN3WDGo6qpsFFNW3oRFtWEaKVnEMgWQe/exec";
      $limit  = 10;
      $offset = 0; 

      $data = array(
         "action" => "inboxList",
         "limit"  => $limit,
         "offset" => $offset
      );

      $ch = curl_init($scriptUrl);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      $result = curl_exec($ch);
      $result = json_decode($result, true);

      if($result['status'] == 'success'){
         foreach($result['data'] as $inbox){
            echo "<tr>";
            echo "<td>{$inbox['from']}</td>";
            echo "<td><a href='read.php?id={$inbox['id']}'>{$inbox['subject']}</a></td>";
            echo "<td>{$inbox['date']}</td>";
            echo "</tr>";
         }
      }
   ?> 
                </thead>
                <tbody id="requestTableBody"></tbody>
              </table>
        
      </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="scriptReq.js"></script>
    <script src="script.js"></script>
  </body>
</html>
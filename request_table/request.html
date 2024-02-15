<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../BrgyHQ+/style.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <style>
      .icon-container {
        position: relative; /* To position the tooltip correctly */
        display: inline-block; /* Keep the icon on the same line */
      }

      i {
        margin-right: 11px;
        font-size: 20px; /* Adjust icon size as needed */
        color: rgb(0, 0, 0); /* Customize icon color */
      }

      .tooltip {
        display: none; /* Hide the tooltip by default */
        position: absolute; /* Position relative to the icon container */
        bottom: 120%; /* Place below the icon */
        left: 50%; /* Center horizontally */
        transform: translateX(-50%); /* Fine-tune centering */
        background-color: #fff; /* Background color */
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); /* Add a subtle shadow */
      }

      .icon-container:hover .tooltip {
        display: block; /* Show the tooltip on hover */
      }
      /* ... your other styles ... */

      .dropdown-menu {
        display: none; /* Hide the menu by default */
        position: absolute;
        top: 120%; /* Place below the icon */
        left: 0; /* Adjust alignment if needed */
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        min-width: 70px; /* Set a minimum width */
        padding: 8px 0;
        margin-right: 10px;
      }

      .dropdown-menu li {
        padding: 8px 12px;
        cursor: pointer; /* Indicate it's clickable*/
      }

      .dropdown-menu li:hover {
        background-color: #f0f0f0;
      }

      .menu-trigger:hover .dropdown-menu {
        display: block; /* Show the menu on hover */
      }
      /* ... other styles ... */
      .dropdown-menu.show {
        display: block; /* Display the menu when 'show' class is present */
      }
    </style>
  </head>
  <body>
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
        <tbody>
        <?php require_once 'fetch_records.php'; ?>
            <?php foreach ($records as $row): ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td>
              <div class="client">
                <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                <div class="client-info">
                  <h4><?php echo $row['client_name']; ?></h4>
                  <small>Joel@gmail.com</small>
                </div>
              </div>
            </td>
            <td><?php echo $row['purpose']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td>
              <span class="no">Not Paid</span>
            </td>
            <td>
              <div class="actions">
                <div class="icon-container">
                  <i class="bi bi-printer"></i>
                  <div class="tooltip">print</div>
                </div>
                <div class="icon-container">
                  <i class="bi bi-trash3"></i>
                  <div class="tooltip">remove</div>
                </div>
                <div class="icon-container menu-trigger">
                  <span class="las la-ellipsis-v"></span>
                  <ul class="dropdown-menu">
                    <li>Print</li>
                    <li>Remove</li>
                  </ul>
                </div>
              </div>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <script>
      const menuTriggers = document.querySelectorAll(".menu-trigger");

      menuTriggers.forEach((trigger) => {
        trigger.addEventListener("click", () => {
          const menu = trigger.querySelector(".dropdown-menu");
          menu.classList.toggle("show");
        });
      });

      // Close menu when clicking outside
      document.addEventListener("click", (event) => {
        const isClickInsideMenu = document.querySelector(".menu-trigger").contains(event.target);

        if (!isClickInsideMenu) {
          // If the click wasn't within the menu area, close any open menus
          const openMenus = document.querySelectorAll(".dropdown-menu.show");
          openMenus.forEach((menu) => menu.classList.remove("show"));
        }
      });
    </script>
  </body>
</html>

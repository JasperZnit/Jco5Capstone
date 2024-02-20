<!DOCTYPE html>
<html>
  <head>
    <title>Dynamic Table</title>
    <link rel="stylesheet" href="../BrgyHQ+/requestStyle.css" />
    <link rel="stylesheet" href="../BrgyHQ+/style.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />   

  </head>
  <body>
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

    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="./scriptReq.js"></script>
  </body>
</html>

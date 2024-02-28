<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .search-container{
            float: right;
        }
         #search{
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <!-- Include Bootstrap JavaScript and its dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Use Bootstrap tab structure -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#completedValidation">Completed Validation</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#completedRequest">Completed Request</a>
        </li>
    </ul>
    <div class="search-container">
        <input type="text" id="search" placeholder="Search for names..">
    </div>
    <div class="tab-content">
        <div id="completedValidation" class="container tab-pane active table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Ref #</th>
                        <th>Date Filed</th>
                        <th>Name</th>
                        <th>Purpose</th>
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php
                        // Include the database connection file
                        require_once("dbConnection.php");

                        // Fetch data in descending order (lastest entry first)
                        $con = mysqli_query($mysqli, "SELECT * FROM users ORDER BY reference_number DESC");

                        // Fetch the next row of a result set as an associative array
                        while ($res = mysqli_fetch_assoc($con)) {
                            echo "<tr>" .
                                 "<td>" . $res['reference_number'] . "</td>" .
                                 "<td>" . $res['date_filed'] . "</td>" .
                                 "<td>" . $res['name'] . "</td>" .
                                 "<td>" . $res['purpose'] . "</td>" .
                                 "<td>" . $res['status'] . "</td>" .
                                 "<td>" . $res['payment'] . "</td>" .
                                 "<td>" . $res['action'] . "</td>" .
                                 "<td><a href='edit.php?reference_number=" . $res['reference_number'] . "'>Edit</a></td>" .
                                 "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <p>
                <a href="add.php">Add New Data</a>
            </p>  
        </div>
        <div id="completedRequest" class="container tab-pane fade table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Validation Id</th>
                        <th>Date Filed</th>
                        <th>Name</th>
                        <th>Remarks</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="myTable2">
                    <?php
                        // Include the database connection file
                        require_once("dbConnection2.php");

                        // Fetch data in descending order (lastest entry first)
                        $con = mysqli_query($mysqli, "SELECT * FROM users ORDER BY validation_id DESC");

                        // Fetch the next row of a result set as an associative array
                        while ($res = mysqli_fetch_assoc($con)) {
                            echo "<tr>" .
                                 "<td>" . $res['validation_id'] . "</td>" .
                                 "<td>" . $res['date_filed'] . "</td>" .
                                 "<td>" . $res['name'] . "</td>" .
                                 "<td>" . $res['remarks'] . "</td>" .
                                 "<td>" . $res['validation_status'] . "</td>" .
                                 "<td>" . $res['action'] . "</td>" .
                                 "<td><a href='edit2.php?validation_id=" . $res['validation_id'] . "'>Edit</a></td>" .
                                 "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <p>
                <a href="add2.php">Add New Data</a>
            </p>
        </div>
    </div>  
    <script>
        document.getElementById("search").addEventListener("keyup", function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable"); // Replace "myTable" with the actual table id
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2]; // Replace 2 with the index of the column containing the names
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    </script>
    <script>
        document.getElementById("search").addEventListener("keyup", function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable2"); // Replace "myTable" with the actual table id
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2]; // Replace 2 with the index of the column containing the names
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    </script>
        
</body>
</html>
<?php
// Include the database connection file
require_once("dbConnection2.php");

// Fetch data in descending order (lastest entry first)
$con = mysqli_query($mysqli, "SELECT * FROM users ORDER BY validation_id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Completed Validation</title>
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
		</style>
</head>
		<body>
			<h2>Homepage</h2>
			<p>
				<a href="add2.php">Add New Data</a>
			</p>
			<table>
				<tr>
					<th>Validation Id</th>
					<th>Date Filed</th>
					<th>Name</th>
					<th>Remarks</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
				<?php
				// Fetch the next row of a result set as an associative array
				while ($res = mysqli_fetch_assoc($con)) {
					echo "<tr>";
					echo "<td>".$res['validation_id']."</td>";
					echo "<td>".$res['date_filed']."</td>";
					echo "<td>".$res['name']."</td>";
					echo "<td>".$res['remarks']."</td>";
					echo "<td>".$res['validation_status']."</td>";
					echo "<td>".$res['action']."</td>";
					echo "<td><a href='edit2.php?validation_id=".$res['validation_id']."'>Edit</a></td>";		
					echo "</tr>";
				}
				?>
			</table>
		</body>
</html>
</html>
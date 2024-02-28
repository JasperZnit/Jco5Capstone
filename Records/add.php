<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<h2>Add Data</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr>
				<td>Reference Number</td>
				<td><input type="text" name="reference_number"></td>
			</tr>
			<tr>
				<td>Date Filed</td>
				<td><input type="date" name="date_filed"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Purpose</td>
				<td><input type="text" name="purpose"></td>
			</tr>
			<tr>
			<td>Status</td>
			<td>
				<select name="status">
					<option value="pending">Pending</option>
					<option value="approved">Approved</option>
					<option value="rejected">Rejected</option>
				</select>
			</td>
		    </tr>
		    <tr>
			<td>Payment</td>
			<td>
				<select name="payment">
					<option value="paid">Paid</option>
					<option value="unpaid">Unpaid</option>
				</select>
			</td>
		</tr>
			<tr>
				<td>Action</td>
				<td><input type="text" name="action"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<h2>Add Data</h2>
	<p>
		<a href="completedrequest.php">Home</a>
	</p>

	<form action="addAction2.php" method="post" name="add">
		<table width="25%" border="0">
			<tr>
				<td>Validation Id</td>
				<td><input type="text" name="validation_id"></td>
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
			<td>Remarks</td>
			<td>
				<select name="remarks">
					<option value="complete">Complete</option>
					<option value="incomplete">Incomplete</option>
				</select>
			</td>
		</tr>
			<tr>
			<td>Status</td>
			<td>
				<select name="validation_status">
					<option value="validated">Pending</option>
					<option value="non-validated">Approved</option>
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
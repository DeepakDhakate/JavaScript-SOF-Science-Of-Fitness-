<!DOCTYPE html>
<html>
<head>
	<title>Showing DATABASE</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
			color: #c96459;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th {
			background-color: #c96459;
			color: white;
		}
		tr:nth-child(even).{background-color: #f2f2f2}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>Phone Number</th>
			<th>Email</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "project");
		if($conn-> connect_error){
			die("Connection Failed : ". $conn-> connect_error);

		}

		$sql = "SELECT fname, lname, address, phone, email FROM reg";
		$result = $conn-> query($sql);

		if ($result-> num_rows > 0) {
			while ($row = $result-> fetch_assoc()) {
				echo "<tr><td>". $row["fname"] ."</td><td>". $row["lname"] ."</td><td>". $row["address"] ."</td><td>". $row["phone"] ."</td><td>". $row["email"] ."</td></tr>";
			}
			echo "</table>";

		}
		else {
			echo "0 result";
		}

		$conn-> close();
		?>
		
	</table>

</body>
</html>
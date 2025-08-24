<!DOCTYPE html>
<html>
<head>
	<title>Record Form</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}

		h1 {
			font-size: 36px;
			margin-bottom: 20px;
			color: #333;
			text-align: center;
			text-transform: uppercase;
			letter-spacing: 3px;
			font-weight: bold;
		}

		table {
			border-collapse: collapse;
			width: 80%;
			margin: 30px auto;
			background-color: white;
			box-shadow: 0px 8px 15px rgba(0,0,0,0.4);
			border-radius: 10px;
			overflow: hidden;
		}

		th {
			background-color: #333;
			color: white;
			font-size: 16px;
			font-weight: bold;
			padding: 10px 20px;
			text-align: left;
			border-right: 1px solid white;
		}

		th:last-child {
			border-right: none;
		}

		td {
			font-size: 14px;
			padding: 10px 20px;
			border-bottom: 1px solid #ddd;
			text-align: left;
			vertical-align: middle;
			max-width: 200px;
			overflow: hidden;
			text-overflow: ellipsis;
		}

		td:last-child {
			border-right: none;
		}

		td.action {
			padding: 10px;
			text-align: center;
			white-space: nowrap;
			border-bottom: none;
			border-right: none;
		}

		.btn {
			display: inline-block;
			background-color: #333;
			color: white;
			padding: 6px 12px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 14px;
			font-weight: bold;
			text-decoration: none;
			margin-right: 10px;
			transition: all 0.2s ease-in-out;
		}

		.btn:hover {
			background-color: #666;
		}

		.btn.delete {
			background-color: #cc0000;
		}

		.btn.delete:hover {
			background-color: #ff4d4d;
		}

		.btn.reply {
			background-color: #0066ff;
		}

		.btn.reply:hover {
			background-color: #3399ff;
		}
	</style>
</head>
<body>
	<h1>Record Form</h1>
	<table>
		<div class="table-responsive">
			<table class="table table-bordered">
			<thead>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Article</th>
			<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<?php
 				// Replace the code below with the appropriate database connection code and SQL query
 				$servername = "localhost";
 				$username = "root";
 				$password = "";
 				$dbname = "yourarticle";
 				$conn = new mysqli($servername, $username, $password, $dbname);
 				if ($conn->connect_error) {
 					die("Connection failed: " . $conn->connect_error);
 				}
 				$sql = "SELECT * FROM article";
 				$result = $conn->query($sql);
 				if ($result->num_rows > 0) {
 					while($row = $result->fetch_assoc()) {
 						echo "<tr>";
 						echo "<td>" . $row['Id'] . "</td>";
 						echo "<td>" . $row['Name'] . "</td>";
 						echo "<td>" . $row['Email'] . "</td>";
 						echo "<td>" . $row['Subject'] . "</td>";
 						echo "<td>" . $row['Article'] . "</td>";
 						echo "<td><a href='reply.php?id=".$row['Id']."' class='btn btn-primary'>Reply</a> <a href='delete.php?id=".$row['Id']."' class='btn btn-danger'>Delete</a></td>";
 						echo "</tr>";
 					}
 				} else {
 					echo "<tr><td colspan='6'>No articles found</td></tr>";
 				}
 				$conn->close();
 				?>
</tbody>
</div>
</table>
</body>
</html>
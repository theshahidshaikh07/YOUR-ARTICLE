<!DOCTYPE html>
<html>
<head>
	<?php
    include 'mainmenubar.php';
    ?>
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
            width: 100%; /* changed width to 100% */
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

        th:nth-child(5),
		td:nth-child(5) {
		  width: 40%; /* adjust the value as needed */
		}

		th:nth-child(3),
		td:nth-child(3) {
		  width: 20%; /* adjust the value as needed */
		}


        td {
            font-size: 14px;
            padding: 10px 20px;
            border-bottom: 1px solid black;
            text-align: left;
            border-right: 1px solid black;
            vertical-align: middle;
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        td:last-child {
            border-right: border-right: 1px solid #ddd;
        }

        td.action {
            padding: 10px;
            text-align: center;
            white-space: nowrap;
            border-bottom: 1px solid black ;
            border-right: none;
        }

        .btn {
            display: block;
            padding-top: 1px;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            
            margin: 10px 0;
            transition: all 0.2s ease-in-out;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.2);
        }

        .btn:hover {
            background-color: #666;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.4);
        }

        .btn.delete {
            background-color: #cc0000;
        }

        .btn.delete:hover {
            background-color: black;
        }

        .btn.reply {
            background-color: #0066ff;
        }

        .btn.reply:hover {
            background-color: #3399ff;
        }

        .btn.publish {
            background-color: #33cc33;
        }

        .btn.publish:hover {
            background-color: #33ff33;
        }



		
	</style>
</head>
<body>
	<h1>Records</h1>
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
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Id'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Subject'] . "</td>";
        echo "<td>" . $row['Article'] . "</td>";
        echo "<td class='action'>
        	<a href='publish.php?id=" . $row['Id'] . "' class='btn btn-success'>Publish</a>
            <a href='https://www.gmail.com' class='btn btn-primary'>Reply</a>
            <a href='delete.php?id=" . $row['Id'] . "' class='btn btn-danger'>Delete</a>     
        </td>";
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
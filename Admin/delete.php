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

$id = $_GET['id'];

// Delete the record from the table
$sql = "DELETE FROM article WHERE Id=$id";
$conn->query($sql);

// Update the remaining IDs in the table
$sql = "SET @count = 0;
        UPDATE article SET article.Id = @count:= @count + 1;
        ALTER TABLE article AUTO_INCREMENT = 1;";
$conn->multi_query($sql);

if ($conn->error) {
    $message = "Error deleting record: " . $conn->error;
    echo "<script>alert('$message'); window.location.href='record.php';</script>";
} else {
    $message = "Record deleted successfully!";
    echo "<script>alert('$message'); window.location.href='records.php';</script>";
}

$conn->close();
?>

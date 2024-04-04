<?php
//connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourarticle";

$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//get the user's input
$username = $_POST['username'];
$password = $_POST['password'];

//check if the username is already taken
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //if the username is already taken
    echo "Username already taken.";
} else {
    //if the username is available, insert the new user into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful ! Now login using your username and password ')</script>";
        echo "<script>window.location.href='mainlogin.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

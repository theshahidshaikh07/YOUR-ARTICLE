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

//check if the user exists in the database as a regular user
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //if the user exists in the database as a regular user, log them in and redirect to the user homepage
    header("Location: Your Article.php");
    exit();
} else {
    //if the user does not exist in the users table, check if they exist in the admins table
    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //if the user exists in the database as an admin, log them in and redirect to the admin homepage
        header("Location: ../Admin/Your Article.php");
        exit();
    } else {
        //if the user does not exist in either table, display an error message
        echo "<script>alert('Invalid username or password.')</script>";
        echo "<script>window.location.href='../index.html';</script>";

    }
}

$conn->close();
?>

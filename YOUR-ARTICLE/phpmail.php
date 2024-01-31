<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $article=$_POST['article'];

    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'yourrarticle@gmail.com';
    $mail->Password = 'tjpn rrql ncmk idoc'; // set the admin email password here
    $mail->SMTPSecure = 'tls';
    $mail->Port = '25';

    $mail->setFrom($email, $name); // set the user email address and name here
    $mail->addAddress('yourrarticle@gmail.com','Your Article'); // set the admin email address here
    $mail->addReplyTo($email, $name); // set the user email address and name as the reply-to address

    $mail->isHTML(true);
    $mail->Subject = $subject.' - '.$name;
    $mail->Body = "Name: $name <br>Email: $email <br>Subject : $subject <br>Article : $article";

    if ($mail->send()) {
    // Save the article in a database
    // Replace the code below with the appropriate database connection code and SQL query
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "yourarticle";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO article (Name, Email, Subject, Article) VALUES ('".$name."', '".$email."', '".$subject."', '".$article."')";
    if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Article submitted successfully')</script>";
    } else {
    echo "<script>alert('Error: " . $sql . "<br>')</script>" . $conn->error;
    }
    $conn->close();
    } else {
    echo "<script>alert('Error sending email: ')</script>" . $mail->ErrorInfo;
    }
    }
?>

<!DOCTYPE html>
<html>
<head>

	<title>Your Article</title>
	<?php
    include 'mainmenubar.php';
    ?><br>
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

</head>
<body>

	<form method="POST">

		<h1>SUBMIT ARTICLE</h1><br><br>
		<input type="text" name="name" placeholder="Name" required>
		<input type="email" name="email" placeholder="Email" required>
		<input type="text" name="subject" placeholder="Subject" required>
		<textarea name="article" rows="4" placeholder="Enter your Article here...." required></textarea>
		<input type="submit" name="submit" value="Send">
	</form>
	<style>
		body {
			background-image: url('b.jpg');
			background-size: cover;
			background-position: center;
			font-family: 'Montserrat', sans-serif;
			
		}
		form {

			background-color: #222;
			padding: 40px;
			border-radius: 20px;
			box-shadow: 0px 8px 15px rgba(0,0,0,0.4);
			width: 80%;
			align-items: center;
			margin-left: 400px;
			max-width: 480px;
			height: 420px;
		}

		h1 {
			font-size: 36px;
			margin-top: 1px;
			margin-bottom: 1px;
			color: white;
			text-align: center;
			text-transform: uppercase;
			letter-spacing: 3px;
			font-weight: 600;
		}

		input[type=text], input[type=email], textarea {
		    padding: 10px;
		    border: none;
		    border-radius: 0;
		    border-bottom: 2px solid #ddd;
		    resize: vertical;
		    width: 80%;
		    text-align: center;
		    margin-left: auto;
			margin-right: auto;
			display: block;
		    font-size: 16px;
		    margin-bottom: 20px;
		    background-color: #fff;
		    color: black; /* Change text color to white */
		    font-family: 'Montserrat', sans-serif;
		}


		input[type=submit] {
			background-color: blueviolet;
			color: #fff;
			padding: 15px 40px;
			border: none;
			border-radius: 0;
			cursor: pointer;
			font-size: 18px;
			transition: all 0.2s ease-in-out;
			font-family: 'Montserrat', sans-serif;
			box-shadow: 0px 4px 10px rgba(0,0,0,0.3);
			margin-top: 20px;
			display: block;
			margin-left: auto;
			margin-right: auto;
		}

		input[type=submit]:hover {
			background-color: red;
			transform: translateY(-2px);
			box-shadow: 0px 6px 20px rgba(0,0,0,0.4);
		}
	</style>
</body>
</html>

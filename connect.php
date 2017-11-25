<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "articles_schema";

$name = $_POST['name'];
$email = $_POST['email'];
$headline = $_POST['headline'];
$story = $_POST['story'];
//$password = $_POST['password'];
//$sha1password = sha1($password);

//Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}

if(empty($name)){
	echo "Name field can not be blank. Pleas press back and correct the issue!";
}

if(empty($email)){
	echo "Email field can not be blank. Pleas press back and correct the issue!";
}

if(empty($headline)){
	echo "Headline field can not be blank. Pleas press back and correct the issue!";
}

if(empty($story)){
	echo "Story field can not be blank. Pleas press back and correct the issue!";
}

$sql = "INSERT INTO news (name, email, headline, story)
		VALUES ('$name', '$email', '$headline', '$story')";

if ($conn->query($sql) === TRUE){
	echo "Thank you!";
} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
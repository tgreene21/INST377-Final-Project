<!DOCTYPE html>
<html>
<head>
	<title>Homepage - Processor</title>

	<style>
		div {
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>

<?php

/*Defining DB credentials*/
$dbuser = 'root';
$dbpass = 'password';
$dbname = 'forum';

/*Connecting to SQL Database*/
$conn = new mysqli("localhost", $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
  die('Connection Failed: ' . $conn->connect_error);
}

/*Setting up for preventing hacks*/

$stmt = $conn->prepare("INSERT INTO Questions VALUES(?,?,?,?)");

$stmt->bind_param("ssss", $status, $topic_owner, $topic_title, $post_topic);

/*Defining superglobal POST variables*/

$status = $_POST["status"];
$topic_owner = $_POST["topic_owner"];
$topic_title = $_POST["topic_title"];
$post_text = $_POST["post_text"];

$stmt->execute();

$stmt->close();

$conn->close();

/*Test to see if it works*/
echo $status;
echo $topic_owner;
echo $topic_title;
echo $post_text;

?>

</body>
</html>

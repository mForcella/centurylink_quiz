<html>
<body>
<?php

include_once('db_config.php');

// create connection
$conn = new mysqli($db_config['servername'], $db_config['username'], $db_config['password'], $db_config['dbname']);

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// insert user data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$sql = "INSERT INTO user (firstname, lastname) VALUES ('".$firstname."', '".$lastname."')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
</body>
</html>
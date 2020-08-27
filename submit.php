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
$prize = $_POST['prize'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$drawing = $_POST['drawing'];

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
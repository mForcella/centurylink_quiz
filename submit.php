<html>
<body>
<?php

// CREATE TABLE user (
//     prize varchar(255),
//     firstname varchar(255),
//     lastname varchar(255),
//     address1 varchar(255),
//     address2 varchar(255),
//     city varchar(255),
//     state varchar(255),
//     zipcode varchar(255),
//     phone varchar(255),
//     email varchar(255),
//     drawing int
// );

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

$sql = "INSERT INTO user (prize, firstname, lastname, address1, address2, city, state, zipcode, phone, email, drawing) VALUES ('".$prize."', '".$firstname."', '".$lastname."', '".$address1."', '".$address2."', '".$city."', '".$state."', '".$zipcode."', '".$phone."', '".$email."', ".$drawing.")";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
</body>
</html>
<?php
$idnumber = $_POST['idnumber'];
$people = $_POST['people'];
$phone = $_POST['phone'];
$date_time = $_POST['date_time'];
$name = $_POST['name'];
$email = $_POST['email'];


//connection
$conn = new mysqli('localhost', 'root', '', 'restaurant');
if ($conn->connect_error) {
	# code...
	die('connection Failed : '.$conn->connect_error);


}else {
	# code...
	$stmt=$conn->prepare("INSERT into registration(idnumber,people, phone, date_time, name, email) values(?,?,?,?,?,?)");
	$stmt->bind_param("siisss", $idnumber,$people,$phone, $date_time, $name, $email);
	$stmt->execute();
	echo "Table Booked successfully.......";
	$stmt->close();
	$conn->close();

}


?> 

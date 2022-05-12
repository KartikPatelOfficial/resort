<?php

$conn = new mysqli('localhost', 'root', '','van');

//$conn = new PDO("mysql:host=localhost;dbname=montana", "root", "");
//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$check_in = date('Y-m-d',strtotime($_POST['check_in']));
$check_out = date('Y-m-d',strtotime($_POST['check_out']));
$people = $_POST['people'];
$children = $_POST['children'];
$rootType = $_POST['room_type'];

//echo $date;die;
//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//  VALUES ('$number', 'Doe', 'john@example.com')";

$sql = "INSERT INTO room_book (name, email, number, check_in, check_out, people, children, room_type) 
VALUES ('$name','$email',$number,'$check_in','$check_out',$people,$children,$rootType)";

if (mysqli_query($conn, $sql)) {
    echo true;
} else {
    echo false;
}

mysqli_close($conn);

?>
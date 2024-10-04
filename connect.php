<?php
$fullName = $_POST['fullName'];
$tourTo = $_POST['tourTo'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(fullName, tourTo, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $fullName, $tourTo, $gender, $email, $password, $number);
    $execval = $stmt->execute();
    echo $execval;
    echo "You are now Registered to our Tour Package!";
    $stmt->close();
    $conn->close();
}

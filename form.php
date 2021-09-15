<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="schoolstable";
$class=$_POST['class'];
$name=$_POST['name'];
$query=$_POST['query'];
$email=$_POST['email'];
$date=$_POST['date'];
$mobile=$_POST['mobile_num'];
$whatsapp=$_POST['whatsapp_num'];
$subject=$_POST['subject'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO enquiry_form (query,subject,class,name,email,date,mobile_number,whatsapp_number)
VALUES ('$query','$subject','$class','$name','$email','$date','$mobile','$whatsapp')";

if ($conn->query($sql) === TRUE) {
  echo "DATA added successfully";
  
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
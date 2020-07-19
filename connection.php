<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="jewellery_shop";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if (!($conn)) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];

$comment= $_POST['comment'];

$sql ="INSERT INTO feedback (firstname,lastname,email,comment) VALUES('$firstname','$lastname','$email','$comment')";

if($conn->query($sql) === TRUE){
    
    echo "New record created succsesfully";
}else{
     echo "Error:" . $sql . "<br>". $conn->error;                        
}

$conn->close();
header('Location:thankyou.html');
?>

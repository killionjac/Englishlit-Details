<?php
$firstname=$_POST['firstname'];
$secondname=$_POST['secondname'];
$othernames=$_POST['othernames'];
$regno=$_POST['regno'];
$contact=$_POST['contact'];

$conn = new mysqli('localhost', 'root', '', 'details');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into details(firstname, secondname, othernames, regno, contact) value(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi",$firstname, $secondname, $othernames, $regno, $contact);
    $stmt->execute();
    echo "Submited Successfully...";
    $stmt->close();
    $conn->close();
}

?>
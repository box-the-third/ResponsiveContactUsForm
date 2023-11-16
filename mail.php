<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$link = mysqli_connect("localhost", "root", "","contactformdb");

if($link === false){
    die("ERROR:couldn't connect." . mysqli_connect_error());
}
$sql = "INSERT INTO clienteletable (name, email, subject, message) VALUES ('$name','$email', '$subject', '$message')";

if(mysqli_query($link, $sql)){
    echo "Records Added Successfully";
} 
else {
    echo "ERROR:couldn't execute $sql.".mysqli_error($link);
}

mysqli_close($link);


?>
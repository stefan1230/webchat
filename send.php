<?php

session_start();
include 'db.php';
$msg = $_POST['msg'];
$name= $_SESSION['name'];

$sql = "INSERT INTO posts(msg,name) VALUES ('$msg','$name')";
mysqli_query($conn,$sql);


header("Location: home.php");



?>
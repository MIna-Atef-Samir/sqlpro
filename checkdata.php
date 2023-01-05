<?php 
include 'conn.php';








$email = $_POST('email');
$password = $_POST('password');


$q = "INSERT INTO workers( email, password) VALUES ( $email , $password)";

$result = $conn->query($q);

if($result){
  header('Localtion: index.php');
}


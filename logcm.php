<?php

include('connection.php');

$username = $_POST["username"];
$passwd = $_POST["password"];

$sql = "SELECT id FROM customer WHERE username = '$username' and password = '$passwd'";
$result = $conn->query($sql);

if($result->num_rows > 0){      //The customer exists.
    include('customer_in.php');
}else {
    include('incorrect.html');
}
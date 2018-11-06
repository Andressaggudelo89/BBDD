<?php

include('connection.php');

$username = $_POST["username"];
$passwd = $_POST["password"];

$sql = "SELECT id FROM customer WHERE username = '$username' and password = '$passwd'";
$result = $conn->query($sql);

if($result->num_rows > 0){      //The customer exists.
    echo "This customer exists.";
}else {
    include('incorrect.html');
}
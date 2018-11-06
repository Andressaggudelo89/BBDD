<?php

$conn = new mysqli("localhost", "root", "", "camping");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

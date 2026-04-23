<?php
$conn = new mysqli("localhost", "root", "", "campus_service");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
?>
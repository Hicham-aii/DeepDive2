<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "koelkast";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (
    !isset($_SESSION['user_id']) && $_SERVER['REQUEST_URI'] != '/DeepDive2/login.php'
    && $_SERVER['REQUEST_URI'] != '/DeepDive2/register.php'
) {
    header("Location: login.php");
}
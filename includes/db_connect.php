<?php
$servername = 'localhost';
$username = 'it221';
$password = 'it221';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

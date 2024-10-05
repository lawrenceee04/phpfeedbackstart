<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'db_connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = $_POST['body'];

    $sql = "INSERT INTO phpfeedbackstart.feedback (name, email, body) VALUES ('$name', '$email', '$body')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../feedback.php');
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }

    $conn->close();
}

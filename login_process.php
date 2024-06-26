<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid_username = "sepehr";
    $valid_password = "13851385";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        header("Location: post.html");
        exit(); // It's important to call exit() after a header redirect.
    } else {
        echo("error")
    }
}
?>
      
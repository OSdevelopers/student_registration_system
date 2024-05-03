<?php

require_once ('dbconnection.php');

//    registration server
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];


    // Check if passwords match and hash the password
    if ($password === $confirm_password) {
        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users`(`username`, `email`, `gender`, `password`) VALUES ('$username','$email','$gender','$hash_password')";

        $query = mysqli_query($connection, $sql);

        if ($query) {
            echo "A student registered successfully.";
        } else {
            echo "An error occured, consult administrator!!";
        }

    } else {
        die("Passwords do not match.");
    }

}

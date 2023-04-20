<?php
require "database/database_connection.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $table = 'users';
    $username = $_POST['username'];
    $confirmation = $_POST['password'];

    $db = new DB_Connection('localhost', 'root', '', 'ware_houses');

    $check = $db->connect()->query("SELECT * FROM `$table` WHERE username = '$username'");
    if ($check->num_rows > 0) {
        $_SESSION['username'] = $username;

        while ($row = $check->fetch_object()) {
            $user[] = $row;
        }
        $password = base64_decode($user[0]->password);
        if ($password == $confirmation) {
            header("Location: index.php");
            exit();
        } else {
            echo "<script> alert('Your password did not match')</script>";
        }
    } else {
        header("Location: register.php");
        exit();
    }
}

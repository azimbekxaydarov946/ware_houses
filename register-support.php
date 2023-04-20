<?php
require "database/data_inserter.php";
include "config.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['username'] && $_POST['email'] && $_POST['password']) {
        $table = 'users';
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = base64_encode($_POST['password']);
        $values = [$username, $email, $password];
        $columns = ['username', 'email', 'password'];

        $db = new DataInserter(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        $check = $db->connect()->query("SELECT * FROM `$table` WHERE username = '$username'");
        if ($check->num_rows == 0) {
            $true = $db->create($table, $values, $columns);
            $_SESSION['username'] = $username;
            if ($true) {
                header("Location: index.php");
                exit();
            } else {
                echo "<script> alert('You have not joined')</script>";
            }
        }

        echo "<script> alert('Available in your system')</script>";
    }
}

<?php
require "database/data_inserter.php";
include "config.php";

$db = new DataInserter(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['username'] && $_POST['email'] && $_POST['password']) {
        $table = 'users';
        $username = $_POST['username'];
        $email = $_POST['email'];
        $role = $_POST['role'] ?? 'guest';
        $permission = $_POST['permission'] ?? 'read';
        $password = base64_encode($_POST['password']);
        $values = [$username, $email, $password];
        $columns = ['username', 'email', 'password'];

        $check = $db->connect()->query("SELECT * FROM `$table` WHERE username = '$username'");
        try {
            if ($check->num_rows == 0) {
                $true = $db->create($table, $values, $columns, $role, $permission);
                if ($true) {
                    header("Location: index.php");
                    exit();
                } else {
                    echo "<script> alert('User has not joined')</script>";
                }
            }
        } catch (Exception $e) {
            if ($this->connect()->connect_error) {
                die("Error executing file:  " . $this->connect()->connect_error);
            }
            return true;
            echo "<script> alert('Please try again later.')</script>";
        }
    }
}

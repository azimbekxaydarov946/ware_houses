<?php
require "database/database.php"; // database running
include "config.php";

session_start();

$username = $_SESSION['username'];
$db = new SqlFilesExecutor(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
$check = $db->connect()->query("SELECT * FROM `users` as `u` 
                                join `user_role` as `ur` on u.id=ur.user_id 
                                join `roles` as `r` on ur.role_id=r.id 
                                WHERE u.username = '$username'");
try {
  if ($check->num_rows > 0) {

    while ($row = $check->fetch_object()) {
      $user[] = $row;
    }
    $_SESSION['role'] = $user[0]->name;
    $check = $user[0]->username;
    if ($username !== $check) {
      session_destroy();
      header("Location: login.php");
      exit();
    }
  } else {
    session_destroy();
    header("Location: login.php");
    exit();
  }
} catch (Exception $e) {
  if ($this->connect()->connect_error) {
    die("Error executing file:  " . $this->connect()->connect_error);
  }
  return true;
  echo "<script> alert('Please try again later.')</script>";
}

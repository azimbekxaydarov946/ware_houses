<?php
require "database/database.php"; // database running

session_start();

$table = 'users';
$username = $_SESSION['username'];
$db = new SqlFilesExecutor('localhost', 'root', '', 'ware_houses');
$check = $db->connect()->query("SELECT * FROM `$table` WHERE username = '$username'");
if ($check->num_rows > 0) {

  while ($row = $check->fetch_object()) {
    $user[] = $row;
  }
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

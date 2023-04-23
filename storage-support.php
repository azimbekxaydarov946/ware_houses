<?php
require "database/data_inserter.php";
include "config.php";

$db = new DataInserter(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['name'] && $_POST['location']) {
        $table = 'storages';
        $name = $_POST['name'];
        $location = $_POST['location'];
        $values = [$name, $location];
        $columns = ['name', 'location'];

        try {
            $true = $db->create($table, $values, $columns);
            if ($true) {
                header("Location: index.php");
                exit();
            } else {
                echo "<script> alert('User has not joined')</script>";
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

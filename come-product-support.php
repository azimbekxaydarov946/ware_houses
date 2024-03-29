<?php
require "database/data_inserter.php";
include "config.php";

$db = new DataInserter(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['product_id'] && $_POST['storage_id'] && $_POST['quantity'] && $_POST['date_added']) {
        $table = 'come_product';
        $product_id = $_POST['product_id'];
        $storage_id = $_POST['storage_id'];
        $quantity = $_POST['quantity'];
        $date_added = $_POST['date_added'];
        $values = [$product_id, $storage_id, $quantity, $date_added];
        $columns = ['product_id', 'storage_id', 'quantity', 'date_added'];

        try {
            $true = $db->create($table, $values, $columns);
            if ($true) {
                header("Location: index.php");
                exit();
            } else {
                echo "<script> alert('User has not joined')</script>";
            }
        } catch (Exception $e) {
            if ($this->db->connect()->connect_error) {
                die("Error executing file:  " . $this->db->connect()->connect_error);
            }
            return true;
            echo "<script> alert('Please try again later.')</script>";
        }
    }
}

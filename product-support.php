<?php
require "database/data_inserter.php";
include "config.php";

$db = new DataInserter(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['name'] && $_POST['price'] && $_POST['expiration_date'] && $_POST['description'] && $_POST['category_id']) {
        $table = 'products';
        $name = $_POST['name'];
        $price = $_POST['price'];
        $expiration_date = $_POST['expiration_date'];
        $description = $_POST['description'];
        $category_id = $_POST['category_id'];
        $values = [
            $name,
            $price,
            $expiration_date,
            $description,
            $category_id,
        ];
        $columns = [
            'name',
            'price',
            'expiration_date',
            'description',
            'category_id',
        ];
        $db = new DataInserter(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        try {
            $true = $db->create($table, $values, $columns);
            if ($true) {
                header("Location: index.php");
                exit();
            } else {
                echo "<script> alert('Product has not joined')</script>";
            }
        } catch (Exception $e) {
            if ($db->connect()->connect_error) {
                die("Error executing file:  " . $db->connect()->connect_error);
            }
            return true;
            echo "<script> alert('Please try again later.')</script>";
        }
    }
}

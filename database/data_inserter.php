<?php
require "database_connection.php";

class DataInserter extends DB_Connection
{

    public function create($table, $values, $columns = null)
    {
        if ($table && $values) {
            $columns = implode(', ', $columns);
            $values = "'" . implode("', '", $values) . "'";
            $sql = "INSERT INTO $table ({$columns}) VALUES ({$values})";

            try {
                $this->connect()->query($sql);
                return true;
            } catch (Exception $e) {
                $this->connect()->query($sql);
                if ($this->connect()->connect_error) {
                    die("Error executing file:  " . $this->connect()->connect_error);
                }

                echo "<script> alert('Please try again later.')</script>";
            }
        }
        return false;
    }
}

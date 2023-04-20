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
            $this->connect()->query($sql);
            if ($this->connect()->connect_error) {
                die("Error executing file:  " . $this->connect()->connect_error);
            }
            return true;
        }
    }
}

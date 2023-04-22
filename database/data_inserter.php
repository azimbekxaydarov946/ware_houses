<?php
require "database_connection.php";

class DataInserter extends DB_Connection
{

    public function create($table, $values, $columns = null, $role = null, $permission = null)
    {
        if ($table && $values) {
            $column = implode(', ', $columns);
            $value = "'" . implode("', '", $values) . "'";
            $sql = "INSERT INTO $table ({$column}) VALUES ({$value})";

            try {
                $this->connect()->query($sql);
                if ($role) {
                    $role = $this->assignRole($values[0], $role);
                }
                return true;
            } catch (Exception $e) {
                $this->connect()->query($sql);
                if ($this->connect()->connect_error) {
                    die("Error executing file:  " . $this->connect()->connect_error);
                }

                echo "<script> alert('Please try again later.')</script>";
            }
        }
    }

    public function assignRole($user_id, $role_id)
    {

        $user = $this->connect()->query("SELECT * FROM `users` WHERE `username` = '$user_id'");
        $role = $this->connect()->query("SELECT * FROM `roles` WHERE `name` = '$role_id'");

        if ($user->num_rows > 0) {
            $db_user = $this->dataGive($user);
            $db_role = $this->dataGive($role);
            $user_id = $db_user[0]->id;
            $role_id = $db_role[0]->id;
            $sql = "INSERT IGNORE INTO user_role (user_id, role_id) VALUES ($user_id, $role_id)";
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
    }

    public function dataGive($data)
    {
        while ($row = $data->fetch_object()) {
            $db_data[] = $row;
        }
        return $db_data;
    }
}

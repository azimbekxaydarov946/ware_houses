<?php
require "database_connection.php";

class SqlFilesExecutor extends DB_Connection
{

    public function execute($sql_files, $path = null)
    {
        foreach ($sql_files as $file) {
            $sql = file_get_contents($path . $file);
            $this->connect()->query($sql);
            if ($this->connect()->connect_error) {
                die("Error executing file:  " . $this->connect()->connect_error);
            }
        }
        return;
        // print "Successfully executed files";
    }
}

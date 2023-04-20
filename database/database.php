<?php
require "sql_files_executor.php";

$sql_files = [
    'create_users_table.sql',
    'create_roles_table.sql',
    'create_permissions_table.sql',
    'create_user_role_table.sql',
    'create_role_permission_table.sql',
    'alter_users_user_role_table.sql',
    'alter_roles_user_role_table.sql',
    'alter_roles_role_permission_table.sql',
    'alter_permissions_role_permission_table.sql'
];
$sqlFileExecutor = new SqlFilesExecutor('localhost', 'root', '', 'ware_houses');
$sqlFileExecutor->execute($sql_files,__DIR__.'/sql/');


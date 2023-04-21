<?php
require "sql_files_executor.php";

$sql_files = [
    'create_users_table.sql',
    'create_roles_table.sql',
    'create_permissions_table.sql',
    'create_user_role_table.sql',
    'create_role_permission_table.sql',
    'create_categories_table.sql',
    'create_products_table.sql',
    'create_storages_table.sql',
    'create_come_product_table.sql',
    'alter_users_user_role_table.sql',
    'alter_roles_user_role_table.sql',
    'alter_roles_role_permission_table.sql',
    'alter_permissions_role_permission_table.sql',
    'alter_product_category_table.sql',
    'alter_products_come_product_table.sql',
    'alter_storages_come_product_table.sql'
];
$sql_insert = [
    'insert_roles_table.sql',
    'insert_users_table.sql',
    'insert_permissions_table.sql',
    'insert_user_role_table.sql',
    'insert_role_permission_table.sql'
];
$sqlFileExecutor = new SqlFilesExecutor('localhost', 'root', '', 'ware_houses');
$sqlFileExecutor->execute($sql_files, __DIR__ . '/sql/');
$sqlFileExecutor->execute($sql_insert, __DIR__ . '/sql/insert/');

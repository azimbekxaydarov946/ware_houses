CREATE TABLE IF NOT EXISTS `role_permission` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `permission_id` INT ,
  `role_id` INT,
  UNIQUE KEY `unique_role_permission` (`role_id`,`permission_id`)
);
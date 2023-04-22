CREATE TABLE IF NOT EXISTS `user_role` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `user_id` INT,
  `role_id` INT,
  UNIQUE KEY `unique_user_role` (`user_id`, `role_id`)
);
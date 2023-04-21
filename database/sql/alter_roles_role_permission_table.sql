ALTER TABLE `role_permission` ADD FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),ADD UNIQUE KEY `unique_permission_role` (`permission_id`, `role_id`);

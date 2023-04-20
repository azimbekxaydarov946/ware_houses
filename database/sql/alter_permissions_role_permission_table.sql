ALTER TABLE `role_permission` ADD FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`);

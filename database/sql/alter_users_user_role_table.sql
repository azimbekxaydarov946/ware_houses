ALTER IGNORE TABLE `user_role` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`), ADD UNIQUE KEY `unique_user_role` (`user_id`, `role_id`);

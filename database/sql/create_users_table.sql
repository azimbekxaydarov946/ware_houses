CREATE TABLE IF NOT EXISTS  `users` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `username` VARCHAR(255) UNIQUE,
  `email` VARCHAR(255),
  `password` VARCHAR(255)
);

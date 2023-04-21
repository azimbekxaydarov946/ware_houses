CREATE TABLE `products` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255),
  `price` DECIMAL(10, 2),
  `expiration_date` date,
  `description` TEXT,
  `category_id` int
);
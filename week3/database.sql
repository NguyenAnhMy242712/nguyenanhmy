
CREATE DATABASE IF NOT EXISTS `LaptopShop` 
  DEFAULT CHARACTER SET utf8mb4 
  COLLATE utf8mb4_unicode_ci;

USE `LaptopShop`;

CREATE TABLE IF NOT EXISTS `Laptops` (
    LaptopID INT AUTO_INCREMENT PRIMARY KEY,
    Brand VARCHAR(50) NOT NULL,
    Model VARCHAR(100) NOT NULL,
    Processor VARCHAR(100),
    RAM INT,
    Storage VARCHAR(50),
    Price DECIMAL(10,2),
    Quantity INT,
    ReleaseYear INT
);


INSERT INTO `Laptops` (Brand, Model, Processor, RAM, Storage, Price, Quantity, ReleaseYear) VALUES
('Dell', 'XPS 13', 'Intel Core i7-1165G7', 16, '512GB SSD', 1500.00, 10, 2021),
('HP', 'Spectre x360', 'Intel Core i5-1135G7', 8, '256GB SSD', 1200.00, 7, 2021),
('Lenovo', 'ThinkPad X1 Carbon', 'Intel Core i7-1185G7', 16, '1TB SSD', 1800.00, 5, 2022),
('Asus', 'ROG Zephyrus G14', 'AMD Ryzen 9 5900HS', 16, '1TB SSD', 2000.00, 3, 2022),
('Apple', 'MacBook Air M1', 'Apple M1', 8, '256GB SSD', 999.00, 12, 2021);

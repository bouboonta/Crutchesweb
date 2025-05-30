-- Создаём базу данных с нужной кодировкой
CREATE DATABASE IF NOT EXISTS site CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE site;

-- Создаём таблицу с нужной кодировкой
CREATE TABLE IF NOT EXISTS title (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title_value VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  content TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Вставляем данные
INSERT INTO title (title_value, content) VALUES
('Мышь', 'Беспроводная мышь с Bluetooth'),
('Монитор', '24-дюймовый FullHD монитор'),
('Клавиатура', 'Механическая клавиатура с подсветкой'),
('Колонки', 'Стерео колонки с USB-питанием');

-- database/init.sql - Inicjalizacja bazy danych

-- Stwórz tabele
CREATE TABLE IF NOT EXISTS `services` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `category` VARCHAR(100),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(20),
  `subject` VARCHAR(255),
  `message` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Wstaw przykładowe dane
INSERT INTO `services` (`name`, `description`, `category`) VALUES
('Prawo rodzinne', 'Obsługuję sprawy dotyczące rodziny, małżeństwa, alimentów', 'family-law'),
('Prawo spadkowe', 'Reprezentuję w sprawach spadkowych i testamentach', 'inheritance-law'),
('Prawo cywilne', 'Windykacja, umowy, spory majątkowe', 'civil-law'),
('Obrona karna', 'Reprezentuję przed sądami karnej', 'criminal-law');
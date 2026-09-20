CREATE DATABASE IF NOT EXISTS arcance CHARSET utf8mb4;

USE arcance;

CREATE TABLE IF NOT EXISTS subscription(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    price DECIMAL(5,2) NOT NULL,
    `storage` BIGINT NOT NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `user`(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    firstname VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    id_subscription INT NOT NULL,
    CONSTRAINT fk_to_subscribe_subscription
        FOREIGN KEY(id_subscription)
        REFERENCES subscription(id) ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS folder(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    id_user INT NOT NULL,
    CONSTRAINT fk_to_create_user
        FOREIGN KEY(id_user)
        REFERENCES `user`(id) ON DELETE CASCADE,
    id_parent_folder INT,
    CONSTRAINT fk_to_contain_parent_folder
        FOREIGN KEY(id_parent_folder)
        REFERENCES folder(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `file`(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    extension VARCHAR(50),
    size BIGINT,
    url VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    id_user INT,
    CONSTRAINT fk_to_own_user
        FOREIGN KEY(id_user)
        REFERENCES `user`(id) ON DELETE CASCADE,
    id_folder INT,
    CONSTRAINT fk_to_file_folder
        FOREIGN KEY(id_folder)
        REFERENCES folder(id) ON DELETE CASCADE
) ENGINE=InnoDB;
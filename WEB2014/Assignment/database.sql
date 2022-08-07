CREATE TABLE `roles`
(
    `id`         int(11)      NOT NULL AUTO_INCREMENT,
    `name`       varchar(255) NOT NULL,
    `created_at` datetime     NOT NULL DEFAULT current_timestamp(),
    `updated_at` datetime     NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`),
    UNIQUE KEY `name` (`name`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

CREATE TABLE `users`
(
    `id`         int(11)      NOT NULL AUTO_INCREMENT,
    `first_name` varchar(255) NOT NULL,
    `last_name`  varchar(255) NOT NULL,
    `email`      varchar(255) NOT NULL,
    `password`   varchar(255) NOT NULL,
    `phone`      varchar(20)  NULL,
    `address`    varchar(255) NULL,
    `role_id`    int(11)      NOT NULL,
    `created_at` datetime     NOT NULL DEFAULT current_timestamp(),
    `updated_at` datetime     NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
    UNIQUE KEY `email` (`email`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

CREATE TABLE `categories`
(
    `id`          int(11)      NOT NULL AUTO_INCREMENT,
    `name`        varchar(255) NOT NULL,
    `slug`        varchar(255) NOT NULL,
    `description` text         NOT NULL,
    `priority`    tinyint(1)   NOT NULL DEFAULT 0,
    `image`       varchar(255)          DEFAULT NULL,
    `created_at`  datetime     NOT NULL DEFAULT current_timestamp(),
    `updated_at`  datetime     NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`),
    UNIQUE KEY `slug` (`slug`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

INSERT INTO `roles` (`name`)
VALUES ('admin'),
       ('user');
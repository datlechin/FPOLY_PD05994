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
    `status`      tinyint(1)   NOT NULL DEFAULT 0,
    `created_at`  datetime     NOT NULL DEFAULT current_timestamp(),
    `updated_at`  datetime     NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`),
    UNIQUE KEY `slug` (`slug`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

INSERT INTO `roles` (`name`)
VALUES ('admin'),
       ('user');

CREATE TABLE `products`
(
    `id`          int(11)        NOT NULL AUTO_INCREMENT,
    `name`        varchar(255)   NOT NULL,
    `slug`        varchar(255)   NOT NULL,
    `description` text           NOT NULL,
    `price`       decimal(10, 2) NOT NULL,
    `image`       varchar(255)            DEFAULT NULL,
    `gallery`     text           NOT NULL,
    `category_id` int(11)        NOT NULL,
    `status`      tinyint(1)     NOT NULL DEFAULT 1,
    `created_at`  datetime       NOT NULL DEFAULT current_timestamp(),
    `updated_at`  datetime       NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
    UNIQUE KEY `slug` (`slug`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

CREATE TABLE `orders`
(
    `id`          int(11)        NOT NULL AUTO_INCREMENT,
    `user_id`     int(11)        NOT NULL,
    `status`      tinyint(1)     NOT NULL DEFAULT 0,
    `created_at`  datetime       NOT NULL DEFAULT current_timestamp(),
    `updated_at`  datetime       NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

CREATE TABLE `order_details`
(
    `id`          int(11)        NOT NULL AUTO_INCREMENT,
    `order_id`    int(11)        NOT NULL,
    `product_id`  int(11)        NOT NULL,
    `quantity`    int(11)        NOT NULL,
    `price`       decimal(10, 2) NOT NULL,
    `created_at`  datetime       NOT NULL DEFAULT current_timestamp(),
    `updated_at`  datetime       NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
    FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;
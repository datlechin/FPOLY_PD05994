DROP DATABASE shop;
CREATE DATABASE shop;

USE shop;

CREATE TABLE users
(
    id          INT                    NOT NULL AUTO_INCREMENT,
    name        VARCHAR(255)           NOT NULL,
    email       VARCHAR(255)           NOT NULL,
    password    VARCHAR(255)           NOT NULL,
    avatar      VARCHAR(255)                    DEFAULT NULL,
    verified_at DATETIME                        DEFAULT NULL,
    role        ENUM ('user', 'admin') NOT NULL DEFAULT 'user',
    created_at  DATETIME                        DEFAULT CURRENT_TIMESTAMP,
    updated_at  DATETIME                        DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY email (email)
);


CREATE TABLE categories
(
    id     INT                         NOT NULL AUTO_INCREMENT,
    name   VARCHAR(255)                NOT NULL,
    slug   VARCHAR(255)                NOT NULL,
    status ENUM ('active', 'inactive') NOT NULL DEFAULT 'active',
    PRIMARY KEY (id),
    UNIQUE KEY slug (slug)
);

CREATE TABLE products
(
    id          INT                         NOT NULL AUTO_INCREMENT,
    category_id INT                         NOT NULL,
    name        VARCHAR(255)                NOT NULL,
    slug        VARCHAR(255)                NOT NULL,
    price       FLOAT                       NOT NULL,
    discount    FLOAT                       NOT NULL,
    image       VARCHAR(255)                NOT NULL,
    description TEXT,
    featured    TINYINT(1)                           DEFAULT 0,
    status      ENUM ('active', 'inactive') NOT NULL DEFAULT 'active',
    views       INT                                  DEFAULT 0,
    created_at  DATETIME                             DEFAULT CURRENT_TIMESTAMP,
    updated_at  DATETIME                             DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY slug (slug),
    KEY category_id (category_id),
    CONSTRAINT products_ibfk_1 FOREIGN KEY (category_id) REFERENCES categories (id)
);

CREATE TABLE comments
(
    id         INT                         NOT NULL AUTO_INCREMENT,
    product_id INT                         NOT NULL,
    user_id    INT                         NOT NULL,
    comment    TEXT                        NOT NULL,
    status     ENUM ('active', 'inactive') NOT NULL DEFAULT 'active',
    created_at DATETIME                             DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME                             DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    KEY product_id (product_id),
    KEY user_id (user_id),
    CONSTRAINT comments_ibfk_1 FOREIGN KEY (product_id) REFERENCES products (id) ON DELETE CASCADE,
    CONSTRAINT comments_ibfk_2 FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
);


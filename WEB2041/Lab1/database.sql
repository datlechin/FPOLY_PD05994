INSERT INTO categories (name) VALUES ('Điện thoại');
UPDATE categories SET name = 'Máy tính bảng' WHERE id = 1;
DELETE FROM categories WHERE id = 1;
SELECT * FROM categories;

INSERT INTO products (name, price, discount, image, description, dacbiet, views, created_at) VALUES ('iPhone 14 Pro Max', 34900000, 4900000, 'https://facebook.com/anh1.jpg', 'Dien thoai Apple', 0, 0, CURRENT_TIMESTAMP);
UPDATE products SET views = 1000 WHERE id = 1;
DELETE FROM products WHERE id = 1;
SELECT * FROM products;
SELECT COUNT(*) FROM products;

INSERT INTO users (name, email, phone, password, avatar, role, created_at) VALUES ('Ngo Quoc Dat', 'datnqpd05994@fpt.edu.vn', '0372124043', '123456', 'https://facebook.com/anh.jpg', 1, CURRENT_TIMESTAMP);
UPDATE users SET name = 'Dat Ngo Quoc' WHERE id = 1;
DELETE FROM users WHERE id = 1;
SELECT * FROM users;

INSERT INTO comments (user_id, product_id, comemnt, created_at) VALUES (1, 1, 'San pham xin', CURRENT_TIMESTAMP);
UPDATE comments SET comment = 'San pham dom' WHERE id = 1;
DELETE FROM comments WHERE id = 1;
SELECT * FROM comments;

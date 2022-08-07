CREATE DATABASE quanlybanhang;
USE quanlybanhang;

CREATE TABLE khachang
(
    maKhachHang CHAR(10)    NOT NULL,
    hoVaTenLot  VARCHAR(50) NOT NULL,
    ten         VARCHAR(50) NOT NULL,
    diaChi      VARCHAR(100) DEFAULT NULL,
    soDienThoai VARCHAR(20) NOT NULL,
    email       VARCHAR(50) NOT NULL,
    PRIMARY KEY (maKhachHang)
);

CREATE TABLE sanpham
(
    maSanPham  CHAR(10)     NOT NULL,
    tenSanPham VARCHAR(200) NOT NULL,
    moTa       VARCHAR(255) DEFAULT NULL,
    soLuong    INT          NOT NULL,
    donGia     DECIMAL(10)  NOT NULL,
    PRIMARY KEY (maSanPham)
);

CREATE TABLE hoadon
(
    maHoaDon    CHAR(10) NOT NULL,
    maKhachHang CHAR(10) NOT NULL,
    ngayMua     DATE     NOT NULL,
    trangThai   CHAR(50) NOT NULL,
    PRIMARY KEY (maHoaDon),
    FOREIGN KEY (maKhachHang) REFERENCES khachang (maKhachHang)
);

CREATE TABLE hoadonchitiet
(
    maHoaDon  CHAR(10) NOT NULL,
    maSanPham CHAR(10) NOT NULL,
    soLuong   INT      NOT NULL,
    PRIMARY KEY (maHoaDon, maSanPham),
    FOREIGN KEY (maHoaDon) REFERENCES hoadon (maHoaDon),
    FOREIGN KEY (maSanPham) REFERENCES sanpham (maSanPham)
);

INSERT INTO khachang (maKhachHang, hoVaTenLot, ten, diaChi, soDienThoai, email)
VALUES ('KH001', 'Nguyễn Thị', 'Nga', '15 Quang Trung TP Đà Nẵng', 'ngant@gamil.com', '0912345670'),
       ('KH002', 'Trần Công', 'Thành', '234 Lê Lợi Quảng Nam', 'thanhtc@gmail.com', '16109423443'),
       ('KH003', 'Lê Hoàng', 'Nam', '23 Trần Phú TP Huế', 'namlt@yahoo.com', '0989354556'),
       ('KH004', 'Vũ Ngọc', 'Hiền', '37 Nguyễn Thị Thập TP Đà Nẵng', 'hienvn@gmail.com', '0894545435');

INSERT INTO sanpham (maSanPham, tenSanPham, moTa, soLuong, donGia)
VALUES (1, 'Samsung Galaxy J7 Pro',
        'Samsung Galaxy J7 Pro là một chiếc smartphone phù hợp với những người yêu thích một sản phẩm pin tốt, thích hệ điều hành mới cùng những tính năng đi kèm độc quyền',
        800, 6600000),
       (2, 'iPhone 6 32GB',
        'iPhone 6 là một trong những smartphone được yêu thích nhất. Lắng nghe nhu cầu về thiết kế, khả năng lưu trữ và giá cả, iPhone 6 32GB được chính thức phân phối chính hãng tại Việt Nam hứa hẹn sẽ là một sản phẩm rất "Hot"',
        500, 8990000),
       (3, 'Laptop Dell Inspiron 3467', 'Dell Inspiron 3467 i3 7100U/4GB/1TB/Win10/(M20NR21)', 507, 11290000),
       (4, 'Pin sạc dự phòng', 'Pin sạc dự phòng Polymer 5.000 mAh eSaver JP85', 600, 200000),
       (5, 'Nokia 3100', 'Nokia 3100 phù hợp với SINH VIÊN', 100, 700000);

INSERT INTO hoadon (maHoaDon, maKhachHang, ngayMua, trangThai)
VALUES ('120954', 'KH001', '2016-03-23', 'Đã thanh toán'),
       ('120955', 'KH002', '2016-04-02', 'Đã thanh toán'),
       ('120956', 'KH003', '2016-07-12', 'Chưa thanh toán'),
       ('120957', 'KH004', '2016-12-04', 'Đã thanh toán');

INSERT INTO hoadonchitiet (maHoaDon, maSanPham, soLuong)
VALUES ('120954', 3, 40),
       ('120954', 1, 20),
       ('120955', 2, 100),
       ('120956', 4, 6),
       ('120956', 2, 60),
       ('120956', 1, 10),
       ('120957', 2, 50);

CREATE TABLE khachhang_danang LIKE khachang;
INSERT INTO khachhang_danang SELECT * FROM khachang WHERE diaChi LIKE '%Đà Nẵng%';
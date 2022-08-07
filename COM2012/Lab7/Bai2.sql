# Cập nhật lại thông tin số điện thoại của khách hàng có mã ‘KH002’ có giá trị mới
# là ‘16267788989’
UPDATE khachang
SET soDienThoai = '16267788989'
WHERE maKhachHang = 'KH002';

# Tăng số lượng mặt hàng có mã ‘3’ lên thêm ‘200’ đơn vị
UPDATE sanpham
SET soLuong = soLuong + 200
WHERE maSanPham = 3;

# Giảm giá cho tất cả sản phẩm giảm 5%
UPDATE sanpham
SET donGia = donGia * 0.95;

# Tăng số lượng của mặt hàng bán chạy nhất trong tháng 12/2016 lên 100 đơn vị
UPDATE sanpham
SET soLuong = soLuong + 100
WHERE maSanPham IN (SELECT h.maSanPham
                    FROM hoadon
                             INNER JOIN hoadonchitiet
                             JOIN hoadonchitiet h on hoadon.maHoaDon = h.maHoaDon
                    WHERE ngayMua LIKE '2016-12-%'
                    GROUP BY h.maSanPham);

# Giảm giá 10% cho 2 sản phẩm bán ít nhất trong năm 2016

# Lay so luong
SELECT SUM(soLuong) as soLuong
FROM hoadonchitiet
GROUP BY maSanPham;

# So luong nho nhat
SELECT MIN(soLuong) as soLuongNN
FROM (SELECT SUM(soLuong) as soLuong FROM hoadonchitiet GROUP BY maSanPham) as soLuong;

# So luong gan nho nhat
SELECT MIN(soLuong) as soLuongGanNN
FROM (SELECT SUM(soLuong) as soLuong
      FROM hoadonchitiet
      WHERE soLuong NOT IN (SELECT MIN(soLuong) as soLuongNN
                            FROM (SELECT SUM(soLuong) as soLuong FROM hoadonchitiet GROUP BY maSanPham) as soLuong)
      GROUP BY maSanPham) as soLuong;
      
UPDATE sanpham
SET donGia = donGia * 0.90
WHERE maSanPham IN (SELECT hoadonchitiet.maSanPham
                    FROM hoadonchitiet
                    GROUP BY maSanPham
                    HAVING SUM(soLuong) IN ((SELECT MIN(soLuong) as soLuongNN
                                             FROM (SELECT SUM(soLuong) as soLuong FROM hoadonchitiet GROUP BY maSanPham) as soLuong),
                                            (SELECT MIN(soLuong) as soLuongGanNN
                                             FROM (SELECT SUM(soLuong) as soLuong
                                                   FROM hoadonchitiet
                                                   WHERE soLuong NOT IN (SELECT MIN(soLuong) as soLuongNN
                                                                         FROM (SELECT SUM(soLuong) as soLuong FROM hoadonchitiet GROUP BY maSanPham) as soLuong)
                                                   GROUP BY maSanPham) as soLuong)));

UPDATE hoadon
SET trangThai = 'Đã thanh toán'
WHERE maHoaDon = '120956';

# Xoá mặt hàng có mã sản phẩm là ‘2’ ra khỏi hoá đơn ‘120956’ và trạng thái là
# chưa thanh toán
# trangThai in hoadon
DELETE
FROM hoadonchitiet
WHERE maSanPham = 2
  AND maHoaDon IN (SELECT hoadon.maHoaDon FROM hoadon WHERE trangThai = 'Chưa thanh toán' AND maHoaDon = '120956');

# Xoá khách hàng chưa từng mua hàng kể từ ngày “1-1-2016”
DELETE
FROM khachang
WHERE maKhachHang IN (SELECT maKhachHang FROM hoadon WHERE ngayMua < '2016-1-1');
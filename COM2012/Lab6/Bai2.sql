# Hiển thị danh sách các khách hàng chưa mua hàng lần nào kể từ tháng 1/1/2020
SELECT *
FROM khachhang
WHERE maKhachHang NOT IN (SELECT maKhachHang FROM hoadon WHERE ngayMuaHang >= '2020-01-01');

# Hiển thị mã sản phẩm, tên sản phẩm có lượt mua nhiều nhất trong tháng 01/2020
SELECT s.maSanPham, s.tenSP, COUNT(*) as luotMua
FROM hoadonchitiet
         INNER JOIN hoadon h on hoadonchitiet.maHoaDon = h.maHoaDon
         INNER JOIN sanpham s on hoadonchitiet.maSanPham = s.maSanPham
WHERE ngayMuaHang LIKE '2020-01-%'
GROUP BY s.maSanPham;

# Hiển thị top 5 khách hàng có tổng số tiền mua hàng nhiều nhất trong năm 2020
SELECT SUM(hdct.soLuong * sanpham.donGia) as tongTien, k.*
FROM sanpham
         INNER JOIN hoadonchitiet hdct on sanpham.maSanPham = hdct.maSanPham
         INNER JOIN hoadon h on hdct.maHoaDon = h.maHoaDon
         INNER JOIN khachhang k on h.maKhachHang = k.maKhachHang
WHERE h.ngayMuaHang LIKE '2020-%'
GROUP BY k.maKhachHang
ORDER BY tongTien DESC
LIMIT 5;


# Hiển thị thông tin các khách hàng sống ở ‘Đà Nẵng’ có mua
# sản phẩm có tên “Iphone 7 32GB” trong tháng 01/2020
SELECT k.*
FROM hoadonchitiet
         INNER JOIN sanpham s on hoadonchitiet.maSanPham = s.maSanPham
         INNER JOIN hoadon h on hoadonchitiet.maHoaDon = h.maHoaDon
         INNER JOIN khachhang k on h.maKhachHang = k.maKhachHang
WHERE k.diaChi LIKE '%TpHCM%'
  AND s.tenSP LIKE '%Samsung%'
  AND h.ngayMuaHang LIKE '2020-01-%'
GROUP BY k.maKhachHang;

# Hiển thị tên sản phẩm có lượt đặt mua nhỏ hơn lượt mua trung bình
# các các sản phẩm
SELECT *
FROM sanpham INNER JOIN hoadonchitiet h on sanpham.maSanPham = h.maSanPham
GROUP BY sanpham.maSanPham
HAVING COUNT(*) <= (SELECT (SELECT COUNT(*) FROM hoadonchitiet) / (SELECT COUNT(*) FROM sanpham));
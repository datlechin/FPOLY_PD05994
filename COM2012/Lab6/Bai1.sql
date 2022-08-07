SELECT hoadon.maHoaDon, hoadon.maKhachHang, hoadon.trangThai, h.maSanPham, h.soLuong, hoadon.ngayMuaHang
FROM hoadon
         INNER JOIN hoadonchitiet h on hoadon.maHoaDon = h.maHoaDon;

SELECT hoadon.maHoaDon, hoadon.maKhachHang, hoadon.trangThai, h.maSanPham, h.soLuong, hoadon.ngayMuaHang
FROM hoadon
         INNER JOIN hoadonchitiet h on hoadon.maHoaDon = h.maHoaDon
WHERE hoadon.maKhachHang = 'KH001';

SELECT hoadon.maHoaDon, s.tenSP, s.donGia, h.soLuong, (s.donGia * h.soLuong) AS thanhTien
FROM hoadon
         INNER JOIN hoadonchitiet h on hoadon.maHoaDon = h.maHoaDon
         INNER JOIN sanpham s on h.maSanPham = s.maSanPham;

SELECT k.hoVaTenLot,
       k.Ten,
       k.Email,
       k.dienThoai,
       hoadon.maHoaDon,
       hoadon.trangThai,
       (h.soLuong * s.donGia) AS thanhTien
FROM hoadon
         INNER JOIN hoadonchitiet h on hoadon.maHoaDon = h.maHoaDon
         INNER JOIN khachhang k on hoadon.maKhachHang = k.maKhachHang
         INNER JOIN sanpham s on h.maSanPham = s.maSanPham
WHERE hoadon.trangThai = 'Chưa thanh toán'
GROUP BY h.maHoaDon;

SELECT hoadon.maHoaDon, hoadon.ngayMuaHang, (h.soLuong * s.donGia) as tongTien
FROM hoadon
         INNER JOIN hoadonchitiet h on hoadon.maHoaDon = h.maHoaDon
         INNER JOIN sanpham s on h.maSanPham = s.maSanPham
WHERE h.soLuong * s.donGia >= 50000000
GROUP BY hoadon.maHoaDon;


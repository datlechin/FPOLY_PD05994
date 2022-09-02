package Assignment;

import java.util.Scanner;

public class TiepThi extends NhanVien {
    private double doanhSo;
    private double hoaHong;

    public TiepThi() {
    }

    public TiepThi(String maNv, String hoTen, double luong, double doanhSo, double hoaHong) {
        super(maNv, hoTen, luong);
        this.doanhSo = doanhSo;
        this.hoaHong = hoaHong;
    }

    public double getDoanhSo() {
        return doanhSo;
    }

    public void setDoanhSo(double doanhSo) {
        this.doanhSo = doanhSo;
    }

    public double getHoaHong() {
        return hoaHong;
    }

    public void setHoaHong(double hoaHong) {
        this.hoaHong = hoaHong;
    }

    @Override
    public double getThuNhap() {
        return super.getLuong() + this.doanhSo + this.hoaHong;
    }

    @Override
    public void nhapThongTin() {
        super.nhapThongTin();
        Scanner sc = new Scanner(System.in);
        System.out.print("Nhập doanh số: ");
        this.doanhSo = sc.nextDouble();
        System.out.print("Nhập hoa hồng: ");
        this.hoaHong = sc.nextDouble();
    }

    @Override
    public void xuatThongTin() {
        super.xuatThongTin();
        System.out.print(" - Doanh số: " + this.doanhSo + " - Hoa hồng: " + this.hoaHong);
    }
}

package Assignment;

import java.util.Scanner;

public abstract class NhanVien {
    private String maNv;
    private String hoTen;
    private double luong;

    public NhanVien() {
    }

    public NhanVien(String maNv, String hoTen, double luong) {
        this.maNv = maNv;
        this.hoTen = hoTen;
        this.luong = luong;
    }

    public String getMaNv() {
        return maNv;
    }

    public void setMaNv(String maNv) {
        this.maNv = maNv;
    }

    public String getHoTen() {
        return hoTen;
    }

    public void setHoTen(String hoTen) {
        this.hoTen = hoTen;
    }

    public double getLuong() {
        return luong;
    }

    public void setLuong(double luong) {
        this.luong = luong;
    }

    public abstract double getThuNhap();

    public double getThueTN() {
        double thue = 0;
        if (getThuNhap() > 15000000) {
            thue = getThuNhap() * 0.12;
        } else if (getThuNhap() >= 8000000 && getThuNhap() <= 15000000) {
            thue = getThuNhap() * 0.1;
        } else {
            thue = getThuNhap();
        }

        return thue;
    }

    public void nhapThongTin() {
        Scanner sc = new Scanner(System.in);
        System.out.print("Nhập mã nhân viên: ");
        this.maNv = sc.nextLine();
        System.out.print("Nhập họ tên: ");
        this.hoTen = sc.nextLine();
        System.out.print("Nhập lương: ");
        this.luong = sc.nextDouble();
    }

    public void xuatThongTin() {
        System.out.print("Mã NV: " + this.maNv + " - Họ tên: " + this.hoTen + " - Lương: " + this.luong + " - Thu nhập: " + getThuNhap() + " - Thuế: " + getThueTN());
    }
}

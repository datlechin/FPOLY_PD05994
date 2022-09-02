package Lab7;

import java.util.Scanner;

public abstract class SinhVien {
    private String hoTen;
    private String chuyenNganh;

    public SinhVien() {
    }

    public SinhVien(String hoTen, String chuyenNganh) {
        this.hoTen = hoTen;
        this.chuyenNganh = chuyenNganh;
    }

    public String getHoTen() {
        return hoTen;
    }

    public void setHoTen(String hoTen) {
        this.hoTen = hoTen;
    }

    public String getChuyenNganh() {
        return chuyenNganh;
    }

    public void setChuyenNganh(String chuyenNganh) {
        this.chuyenNganh = chuyenNganh;
    }

    public abstract double getDiem();

    public String getHocLuc() {
        if (getDiem() >= 9) {
            return "Xuất sắc";
        } else if (getDiem() >= 7.5) {
            return "Giỏi";
        } else if (getDiem() >= 6.5) {
            return "Khá";
        } else if (getDiem() >= 5) {
            return "Trung bình";
        } else {
            return "Yếu";
        }
    }

    public void nhap() {
        Scanner sc = new Scanner(System.in);
        System.out.print("Nhập họ tên: ");
        this.hoTen = sc.nextLine();
        System.out.print("Nhập chuyên ngành: ");
        this.chuyenNganh = sc.nextLine();
    }

    public void xuat() {
        System.out.println("Họ tên: " + this.hoTen + " Chuyên ngành: " + this.chuyenNganh + " Điểm: " + getDiem() + " Học lực: " + getHocLuc());
    }
}

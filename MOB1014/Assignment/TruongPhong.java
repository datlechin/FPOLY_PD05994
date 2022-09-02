package Assignment;

import java.util.Scanner;

public class TruongPhong extends NhanVien {
    private double luongTrachNhiem;

    public TruongPhong() {
    }

    public TruongPhong(String maNv, String hoTen, double luong, double luongTrachNhiem) {
        super(maNv, hoTen, luong);
        this.luongTrachNhiem = luongTrachNhiem;
    }

    public double getLuongTrachNhiem() {
        return luongTrachNhiem;
    }

    public void setLuongTrachNhiem(double luongTrachNhiem) {
        this.luongTrachNhiem = luongTrachNhiem;
    }

    @Override
    public double getThuNhap() {
        return getLuong() + this.luongTrachNhiem;
    }

    @Override
    public void nhapThongTin() {
        super.nhapThongTin();
        Scanner sc = new Scanner(System.in);
        System.out.print("Nhập lương trách nhiệm: ");
        this.luongTrachNhiem = sc.nextDouble();
    }

    @Override
    public void xuatThongTin() {
        super.xuatThongTin();
        System.out.print(" - Lương trách nhiệm: " + this.luongTrachNhiem);
    }
}

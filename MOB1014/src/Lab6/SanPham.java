package Lab6;

import java.util.Scanner;

public class SanPham {
    private String tenSp;
    private double donGia;
    private String hang;

    public SanPham() {
    }

    public SanPham(String tenSp, double donGia, String hang) {
        this.tenSp = tenSp;
        this.donGia = donGia;
        this.hang = hang;
    }

    public String getTenSp() {
        return tenSp;
    }

    public void setTenSp(String tenSp) {
        this.tenSp = tenSp;
    }

    public double getDonGia() {
        return donGia;
    }

    public void setDonGia(double donGia) {
        this.donGia = donGia;
    }

    public String getHang() {
        return hang;
    }

    public void setHang(String hang) {
        this.hang = hang;
    }

    public void nhap() {
        Scanner sc = new Scanner(System.in);
        System.out.print("Nhập tên sản phẩm: ");
        this.tenSp = sc.nextLine();
        System.out.print("Nhập đơn giá: ");
        this.donGia = sc.nextDouble();
        System.out.print("Nhập hãng sản xuất: ");
        this.hang = sc.next();
    }

    public void xuat() {
        if (this.hang.equalsIgnoreCase("Nokia")) {
            System.out.println("Tên sản phẩm: " + this.tenSp + " - Đơn giá: " + this.donGia + " - Hãng sản xuất: " + this.hang);
        }
    }
}

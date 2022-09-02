package Lab5.Bai3;

import java.util.Scanner;

public class SanPham {
    private String tenSp;
    private double giaSp;

    public String getTenSp() {
        return tenSp;
    }

    public void setTenSp(String tenSp) {
        this.tenSp = tenSp;
    }

    public double getGiaSp() {
        return giaSp;
    }

    public void setGiaSp(double giaSp) {
        this.giaSp = giaSp;
    }

    public void nhap() {
        Scanner sc = new Scanner(System.in);
        System.out.print("Nhập tên sản phẩm: ");
        tenSp = sc.nextLine();
        System.out.print("Nhập giá sản phẩm: ");
        giaSp = sc.nextDouble();
    }

    public void xuat() {
        System.out.println("Tên sản phẩm: " + tenSp + " - " + "Giá sản phẩm: " + giaSp);
    }
}

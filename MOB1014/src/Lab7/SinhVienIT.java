package Lab7;

import java.util.Scanner;

public class SinhVienIT extends SinhVien {
    public double diemJava;
    public double diemHtml;
    public double diemCss;

    public SinhVienIT() {
    }

    public SinhVienIT(String hoTen, String chuyenNganh, double diemJava, double diemHtml, double diemCss) {
        super(hoTen, chuyenNganh);
        this.diemJava = diemJava;
        this.diemHtml = diemHtml;
        this.diemCss = diemCss;
    }

    public double getDiem() {
        return (2 * diemJava + diemHtml + diemCss) / 4;
    }

    @Override
    public void nhap() {
        super.nhap();
        Scanner sc = new Scanner(System.in);
        System.out.print("Nhập điểm Java: ");
        this.diemJava = sc.nextDouble();
        System.out.print("Nhập điểm HTML: ");
        this.diemHtml = sc.nextDouble();
        System.out.print("Nhập điểm CSS: ");
        this.diemCss = sc.nextDouble();
    }
}

package Lab7;

import java.util.Scanner;

public class SinhVienBiz extends SinhVien {
    public double diemMarketing;
    public double diemSales;

    public SinhVienBiz() {
    }

    public SinhVienBiz(String hoTen, String chuyenNganh, double diemMarketing, double diemSales) {
        super(hoTen, chuyenNganh);
        this.diemMarketing = diemMarketing;
        this.diemSales = diemSales;
    }

    public double getDiem() {
        return (2 * diemMarketing + diemSales) / 3;
    }

    @Override
    public void nhap() {
        super.nhap();
        Scanner sc = new Scanner(System.in);
        System.out.print("Nhập điểm Marketing: ");
        this.diemMarketing = sc.nextDouble();
        System.out.print("Nhập điểm Sales: ");
        this.diemSales = sc.nextDouble();
    }
}

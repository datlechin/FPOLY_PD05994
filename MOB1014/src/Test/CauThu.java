package Test;

import java.util.Scanner;

public class CauThu {
    private String maCt;
    private String tenCt;
    private String ngaySinh;
    private double luongCb;

    public CauThu() {
    }

    public CauThu(String maCt, String tenCt, String ngaySinh, double luongCb) {
        this.maCt = maCt;
        this.tenCt = tenCt;
        this.ngaySinh = ngaySinh;
        this.luongCb = luongCb;
    }

    public String getMaCt() {
        return maCt;
    }

    public void setMaCt(String maCt) {
        this.maCt = maCt;
    }

    public String getTenCt() {
        return tenCt;
    }

    public void setTenCt(String tenCt) {
        this.tenCt = tenCt;
    }

    public String getNgaySinh() {
        return ngaySinh;
    }

    public void setNgaySinh(String ngaySinh) {
        this.ngaySinh = ngaySinh;
    }

    public double getLuongCb() {
        return luongCb;
    }

    public void setLuongCb(double luongCb) {
        this.luongCb = luongCb;
    }

    public void nhapTT() {
        Scanner sc = new Scanner(System.in);

        System.out.print("Nhập mã cầu thủ: ");
        this.maCt = sc.nextLine();
        System.out.print("Nhập tên cầu thủ: ");
        this.tenCt = sc.nextLine();
        System.out.print("Nhập ngày sinh: ");
        this.ngaySinh = sc.nextLine();
        System.out.print("Nhập lương cơ bản: ");
        this.luongCb = sc.nextDouble();
    }

    public void xuatTT() {
        System.out.println("Mã CT: " + this.maCt + " - Tên CT: " + this.tenCt + " - Ngày sinh: " + this.ngaySinh + " - Lương CB: " + this.luongCb);
    }
}

package Lab6;

import java.util.Scanner;

public class SinhVien {
    private String hoTen;
    private String soDt;
    private String email;
    private String cmnd;

    public SinhVien() {
    }

    public SinhVien(String hoTen, String soDt, String email, String cmnd) {
        this.hoTen = hoTen;
        this.soDt = soDt;
        this.email = email;
        this.cmnd = cmnd;
    }

    public String getHoTen() {
        return hoTen;
    }

    public void setHoTen(String hoTen) {
        this.hoTen = hoTen;
    }

    public String getSoDt() {
        return soDt;
    }

    public void setSoDt(String soDt) {
        this.soDt = soDt;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getCmnd() {
        return cmnd;
    }

    public void setCmnd(String cmnd) {
        this.cmnd = cmnd;
    }

    public void nhap() {
        String phoneRegex = "0\\d{9}";
        String emailRegex = "\\w+@\\w+\\.\\w+";
        String cmndRegex = "\\d{9}";

        Scanner sc = new Scanner(System.in);
        System.out.print("Nhập họ tên: ");
        this.hoTen = sc.nextLine();

        do {
            System.out.print("Nhập số điện thoại: ");
            this.soDt = sc.nextLine();

            if (!this.soDt.matches(phoneRegex)) {
                System.out.println("Số điện thoại không hợp lệ!");
            } else {
                break;
            }
        } while (true);

        do {
            System.out.print("Nhập email: ");
            this.email = sc.nextLine();

            if (!this.email.matches(emailRegex)) {
                System.out.println("Email không hợp lệ!");
            } else {
                break;
            }
        } while (true);

        do {
            System.out.print("Nhập CMND: ");
            this.cmnd = sc.nextLine();

            if (!this.cmnd.matches(cmndRegex)) {
                System.out.println("CMND không hợp lệ!");
            } else {
                break;
            }
        } while (true);
    }

    public void xuat() {
        System.out.println("Họ tên: " + this.hoTen + " - Số điện thoại: " + this.soDt + " - Email: " + this.email + " - CMND: " + this.cmnd);
    }
}

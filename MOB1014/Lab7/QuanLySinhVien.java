package Lab7;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Scanner;

public class QuanLySinhVien {
    static ArrayList<SinhVien> dsSinhVien = new ArrayList<>();

    public static void nhapDanhSachSV() {
        System.out.println("Chọn kiểu sinh viên để nhập: ");
        System.out.println("1. Sinh viên Biz");
        System.out.println("2. Sinh viên IT");
        System.out.println("0. Thoát");

        System.out.print("Nhập lựa chọn: ");
        Scanner sc = new Scanner(System.in);
        int luaChon = sc.nextInt();

        if (luaChon == 0) {
            return;
        }

        switch (luaChon) {
            case 1:
                System.out.print("Nhập số lượng sinh viên: ");
                int n = sc.nextInt();
                for (int i = 0; i < n; i++) {
                    System.out.println("\nNhập thông tin sinh viên thứ " + (i + 1));
                    SinhVienBiz svBiz = new SinhVienBiz();
                    svBiz.nhap();
                    dsSinhVien.add(svBiz);
                }
                break;
            case 2:
                System.out.print("Nhập số lượng sinh viên: ");
                int m = sc.nextInt();
                for (int i = 0; i < m; i++) {
                    System.out.println("\nNhập thông tin sinh viên thứ " + (i + 1));
                    SinhVienIT svIT = new SinhVienIT();
                    svIT.nhap();
                    dsSinhVien.add(svIT);
                }
                break;
            default:
                System.out.println("Lựa chọn không hợp lệ!");
                break;
        }
    }

    public static void xuatDanhSachSV() {
        for (SinhVien sv : dsSinhVien) {
            sv.xuat();
        }
    }

    public static void xuatDanhSachSVGioi() {
    }

    public static void xuatDanhSachSVTheoDiem() {
    }
}

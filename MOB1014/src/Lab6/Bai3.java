package Lab6;

import java.util.ArrayList;
import java.util.Scanner;

public class Bai3 {
    public static void main(String[] args) {
        ArrayList<SinhVien> listSv = new ArrayList<>();
        Scanner sc = new Scanner(System.in);

        System.out.print("Nhập số sinh viên: ");
        int n = sc.nextInt();

        for (int i = 0; i < n; i++) {
            System.out.println("\nNhập thông tin sinh viên thứ " + (i + 1));
            SinhVien sv = new SinhVien();
            sv.nhap();
            listSv.add(sv);
        }

        System.out.println("\nDanh sách sinh viên: ");
        for (SinhVien sv : listSv) {
            sv.xuat();
        }
    }
}

package Lab5.Bai3;

import Lab7.QuanLySinhVien;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Scanner;

public class Menu {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        ArrayList<SanPham> list = new ArrayList<>();
        int choice;

        do {
            System.out.println("_________________MENU_________________");
            System.out.println("1. Nhập danh sách sản phẩm");
            System.out.println("2. Sắp xếp giảm dần theo giá");
            System.out.println("3. Tìm và xóa sản phẩm theo tên");
            System.out.println("4. Xuất giá trung bình của các sản phẩm");
            System.out.println("5. Kết thúc");
            System.out.println("__________________________________________");

            System.out.print("Nhập lựa chọn của bạn: ");
            choice = scanner.nextInt();
            System.out.println();

            switch (choice) {
                case 1:
                    System.out.println("Nhập danh sách sản phẩm");
                    Scanner sc = new Scanner(System.in);
                    System.out.print("Nhập số lượng sản phẩm: ");
                    int n = sc.nextInt();

                    for (int i = 0; i < n; i++) {
                        SanPham sp = new SanPham();
                        sp.nhap();
                        list.add(sp);
                    }
                    break;
                case 2:
                    System.out.println("Sắp xếp giảm dần theo giá");
                    System.out.println("Sắp xếp danh sách sản phẩm");
                    list.sort((a, b) -> (int) a.getTenSp().compareTo(b.getTenSp()));
                    for (SanPham sp : list) {
                        sp.xuat();
                    }
                    break;
                case 3:
                    System.out.println("Xóa sản phẩm");
                    System.out.print("Nhập tên sản phẩm cần xóa: ");
                    String ten = scanner.next();


                    list.removeIf(sp -> sp.getTenSp().equalsIgnoreCase(ten));
                    for (SanPham sp : list) {
                        sp.xuat();
                    }
                    break;
                case 4:
                    System.out.println("Xuất giá trung bình của các sản phẩm");
                    double sum = 0;
                    for (SanPham sp : list) {
                        sum += sp.getGiaSp();
                    }
                    System.out.println("Giá trung bình của các sản phẩm: " + sum / list.size());
                    break;
                case 5:
                    System.out.println("Thoát chương trình");
                    System.exit(0);
                    break;
                default:
                    System.out.println("Nhập sai lựa chọn");
                    break;
            }

            if (choice != 0) {
                System.out.println();
                System.out.print("Bạn có muốn tiếp tục chương trình không? (Y/N): ");
                String choice1 = scanner.next();
                if (choice1.equalsIgnoreCase("N")) {
                    break;
                }
            }
        } while (choice != 0);
    }

}

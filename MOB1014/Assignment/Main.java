package Assignment;

import java.util.Scanner;

public class Main {
    public static final String ANSI_RESET = "\u001B[0m";
    public static final String ANSI_YELLOW = "\u001B[33m";

    public static void main(String[] args) {
        menu();
    }

    public static void menu() {
        Scanner scanner = new Scanner(System.in);
        QuanLy quanLy = new QuanLy();

        int choice;

        do {
            System.out.println(ANSI_YELLOW + "------DANH SÁCH MENU CHỨC NĂNG----" + ANSI_RESET);
            System.out.println("1. Nhập danh sách nhân viên");
            System.out.println("2. Xuất danh sách nhân viên");
            System.out.println("3. Tìm kiếm nhân viên theo mã");
            System.out.println("4. Xoá nhân viên theo mã");
            System.out.println("5. Cập nhật thông tin nhân viên");
            System.out.println("6. Tìm kiếm nhân viên theo lương");
            System.out.println("7. Sắp xếp danh sách nhân viên theo họ tên");
            System.out.println("8. Sắp xếp danh sách nhân viên theo thu nhập");
            System.out.println("9. Xuất 5 nhân viên có thu nhập cao nhất công ty");
            System.out.println("0. Thoát chương trình");
            System.out.println("__________________________________________");

            System.out.print("Nhập lựa chọn của bạn: ");
            choice = scanner.nextInt();
            System.out.println();

            switch (choice) {
                case 1 -> {
                    System.out.println("Nhập danh sách nhân viên");
                    quanLy.nhapDanhSach();
                }
                case 2 -> {
                    System.out.println("Xuất danh sách nhân viên");
                    quanLy.xuatDanhSach();
                }
                case 3 -> {
                    System.out.println("Tìm kiếm nhân viên theo mã");
                    quanLy.timNhanVien();
                }
                case 4 -> {
                    System.out.println("Xoá nhân viên theo mã");
                    quanLy.xoaNhanVien();
                }
                case 5 -> {
                    System.out.println("Cập nhật thông tin nhân viên");
                    quanLy.capNhatNhanVien();
                }
                case 6 -> {
                    System.out.println("Tìm kiếm nhân viên theo lương");
                    quanLy.timTheoKhoangLuong();
                }
                case 7 -> {
                    System.out.println("Sắp xếp danh sách nhân viên theo họ tên");
                    quanLy.sapXepTheoTen();
                }
                case 8 -> {
                    System.out.println("Sắp xếp danh sách nhân viên theo thu nhập");
                    quanLy.sapXepTheoThuNhap();
                }
                case 9 -> {
                    System.out.println("Xuất 5 nhân viên có thu nhập cao nhất công ty");
                    quanLy.xuatTop5ThuNhap();
                }
                case 0 -> {
                    System.out.println("Thoát chương trình");
                    System.exit(0);
                }
                default -> System.out.println("Nhập sai lựa chọn");
            }

            System.out.println();
            System.out.print("Quay lại trang menu? (Y/N): ");
            String choice1 = scanner.next();
            if (choice1.equalsIgnoreCase("N")) {
                break;
            }
        } while (true);
    }
}

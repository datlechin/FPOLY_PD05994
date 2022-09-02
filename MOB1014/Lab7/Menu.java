package Lab7;

import java.util.Scanner;

public class Menu {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int choice;

        do {
            System.out.println("_________________MENU_________________");
            System.out.println("1. Nhập danh sách sinh viên");
            System.out.println("2. Xuất thông tin danh sách sinh viên");
            System.out.println("3. Xuất danh sách sinh viên có học lực giỏi");
            System.out.println("4. Sắp xếp danh sách sinh viên theo điểm");
            System.out.println("5. Kết thúc");
            System.out.println("__________________________________________");

            System.out.print("Nhập lựa chọn của bạn: ");
            choice = scanner.nextInt();
            System.out.println();

            switch (choice) {
                case 1:
                    System.out.println("Nhập danh sách sinh viên");
                    QuanLySinhVien.nhapDanhSachSV();
                    break;
                case 2:
                    System.out.println("Xuất danh sách sinh viên");
                    QuanLySinhVien.xuatDanhSachSV();
                    break;
                case 3:
                    System.out.println("Xuất danh sách sinh viên có học lực giỏi");
                    QuanLySinhVien.xuatDanhSachSVGioi();
                    break;
                case 4:
                    System.out.println("Sắp xếp danh sách sinh viên theo điểm");
                    QuanLySinhVien.xuatDanhSachSVTheoDiem();
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
                } else if (choice1.equalsIgnoreCase("Y")) {
                    continue;
                }
            }
        } while (choice != 0);
    }
}

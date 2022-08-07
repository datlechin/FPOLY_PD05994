package Lab5;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Scanner;

public class Bai2 {
    public static void main(String[] args) {
        ArrayList<String> listName = new ArrayList<>();
        Scanner scanner = new Scanner(System.in);

        int choice;

        do {
            System.out.println("_________________MENU_________________");
            System.out.println("1. Nhập danh sách họ và tên");
            System.out.println("2. Xuất danh sách");
            System.out.println("3. Xuất danh sách ngẫu nhiên");
            System.out.println("4. Sắp xếp giảm dần và xuất danh sách");
            System.out.println("5. Tìm và xóa họ tên");
            System.out.println("6. Thoát");
            System.out.println("__________________________________________");

            System.out.print("Nhập lựa chọn của bạn: ");
            choice = scanner.nextInt();
            System.out.println();

            switch (choice) {
                case 1:
                    System.out.println("Nhập danh sách họ và tên");
                    System.out.print("Nhập số lượng họ và tên: ");
                    int n = scanner.nextInt();
                    scanner.nextLine();
                    for (int i = 0; i < n; i++) {
                        System.out.print("Nhập họ và tên thứ " + (i + 1) + ": ");
                        listName.add(scanner.nextLine());
                    }
                    break;
                case 2:
                    System.out.println("Xuất danh sách họ và tên");
                    for (String name : listName) {
                        System.out.print(name + ", ");
                    }
                    break;
                case 3:
                    System.out.println("Xuất danh sách ngẫu nhiên");
                    Collections.shuffle(listName);
                    for (String name : listName) {
                        System.out.print(name + ", ");
                    }
                    break;
                case 4:
                    System.out.println("Sắp xếp giảm dần và xuất danh sách");
                    Collections.sort(listName);
                    Collections.reverse(listName);
                    for (String name : listName) {
                        System.out.print(name + ", ");
                    }
                    break;
                case 5:
                    System.out.println("Tìm và xóa họ tên");
                    System.out.print("Nhập họ và tên cần tìm: ");
                    String nameFind = scanner.next();
                    int index = listName.indexOf(nameFind);
                    if (index != -1) {
                        listName.remove(index);
                        System.out.println("Đã xóa họ tên " + nameFind);
                    } else {
                        System.out.println("Không tìm thấy họ tên " + nameFind);
                    }
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

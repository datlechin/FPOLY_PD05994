package Lab2;

import java.util.Scanner;

public class Bai4 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        boolean flag = true;

        do {
            clearScreen();
            System.out.println("PD05994 - NGO QUOC DAT");
            System.out.println("---------------------------------");
            System.out.println("1. Giải hệ phương trình bậc nhất");
            System.out.println("2. Giải hệ phương trình bậc hai");
            System.out.println("3. Tính tiền điện");
            System.out.println("4. Thoát");
            System.out.println("---------------------------------");

            System.out.print("Lựa chọn của bạn (1-4): ");
            int choice = scanner.nextInt();

            System.out.println();
            switch (choice) {
                case 1:
                    System.out.println("Giải phương trình bậc nhất");
                    Bai1.main(args);
                    break;
                case 2:
                    System.out.println("Giải phương trình bậc hai");
                    Bai2.main(args);
                    break;
                case 3:
                    System.out.println("Tính tiền điện");
                    Bai3.main(args);
                    break;
                case 4:
                    System.out.println("Bạn đã thoát khỏi chương trình");
                    System.exit(0);
                default:
                    System.out.println("Lựa chọn không hợp lệ");
                    break;
            }
            System.out.print("\nBạn có muốn tiếp tục chương trình không? (Y/N): ");
            String choice2 = scanner.next();

            if (choice2.equalsIgnoreCase("N")) {
                flag = false;
            } else {
                System.out.println();
            }
        } while (flag);
    }

    public static void clearScreen() {
        System.out.print("\033[H\033[2J");
        System.out.flush();
    }
}

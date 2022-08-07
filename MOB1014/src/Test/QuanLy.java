package Test;

import java.util.ArrayList;
import java.util.Scanner;

public class QuanLy {
    static Scanner sc = new Scanner(System.in);
    static ArrayList<CauThu> listCt = new ArrayList<>();

    public static void main(String[] args) {
        menu();
    }

    public static void menu() {
        int choose;

        do {
            System.out.println("__________________MENU_____________________");
            System.out.println("1. Nhập danh sách cầu thủ");
            System.out.println("2. Xuất danh sách cầu thủ");
            System.out.println("3. Cập nhật thông tin cầu thủ");
            System.out.println("4. Xoá cầu thủ");
            System.out.println("5. Tìm và hiển thị cầu thủ theo khoảng lương");
            System.out.println("6. Sắp xếp mức lương của các cầu thủ giảm dần");
            System.out.println("7. Sắp xếp tên của các cầu thủ tăng dần");
            System.out.println("8. Thoát chương trình");
            System.out.println("_____________________________________________");

            System.out.print("Lựa chọn chức năng: ");
            choose = sc.nextInt();
            System.out.println();

            switch (choose) {
                case 1 -> {
                    create();
                }

                case 2 -> {
                    list();
                }

                case 3 -> {
                    update();
                }

                case 4 -> {
                    delete();
                }

                case 5 -> {
                    findBySalaryRange();
                }

                case 6 -> {

                }

                case 0 -> {
                    System.out.println("Thoát chương trình thành công!");
                    System.exit(0);
                }

                default -> {
                    System.out.println("Lựa chọn của bạn không hợp lệ!");
                }
            }

            System.out.print("\nBạn có muốn quay lại trang menu? (Y/N): ");
            String choice = sc.next();
            System.out.println();
            if (choice.equalsIgnoreCase("N")) {
                System.exit(0);
            }
        } while (true);
    }

    public static void create() {
        System.out.println("___________Nhập danh sách cầu thủ___________");
        System.out.print("Nhập số lượng cầu thủ: ");
        int n = sc.nextInt();

        for (int i = 0; i < n; i++) {
            System.out.println("\nNhập thông tin cầu thủ thứ " + (i + 1));
            CauThu ct = new CauThu();
            ct.nhapTT();
            listCt.add(ct);
        }
    }

    public static void list() {
        System.out.println("___________Xuất danh sách cầu thủ___________");

        if (listCt.size() == 0) {
            System.out.println("Không tìm thấy cầu thủ nào");
        } else {
            for (CauThu ct: listCt) {
                ct.xuatTT();
            }
        }
    }

    public static void update() {
        System.out.println("__________Cập nhật thông tin cầu thủ__________");
        System.out.print("Nhập mã cầu thủ cần cập nhật: ");
        String maCt = sc.nextLine();
        boolean flag = false;

        for (CauThu ct: listCt) {
            if (ct.getMaCt().equalsIgnoreCase(maCt)) {
                ct.nhapTT();
                System.out.println("Cập nhật cầu thủ có mã " + maCt + " thành công!");
                ct.xuatTT();
                flag = true;
                break;
            }
        }

        if (!flag) {
            System.out.println("Không tìm thấy cầu thủ nào có mã số " + maCt);
        }
    }

    public static void delete() {
        System.out.println("__________Xoá cầu thủ__________");
        System.out.print("Nhập mã cầu thủ cần xoá: ");
        String maCt = sc.nextLine();
        boolean flag = false;

        for (CauThu ct: listCt) {
            if (ct.getMaCt().equalsIgnoreCase(maCt)) {
                listCt.remove(ct);
                System.out.println("Xoá cầu thủ có mã " + maCt + " thành công!");
                flag = true;
                break;
            }
        }

        if (!flag) {
            System.out.println("Không tìm thấy cầu thủ nào có mã " + maCt);
        }
    }

    public static void findBySalaryRange() {
        System.out.println("__________Tìm kiếm cầu thủ theo khoảng lương__________");
        System.out.print("Nhập khoảng lương bắt đầu: ");
        double salaryStart = sc.nextDouble();
        System.out.print("Nhập khoảng lương kết thúc: ");
        double salaryEnd = sc.nextDouble();
        boolean flag = false;

        for (CauThu ct : listCt) {
            if (ct.getLuongCb() >= salaryStart && ct.getLuongCb() <= salaryEnd) {
                ct.xuatTT();
                flag = true;
            }
        }

        if (flag) {
            System.out.println("Không tìm thấy cầu thủ nào có lương từ " + salaryStart + " đến " + salaryEnd);
        }
    }

    public static void sortBySalary() {
        System.out.println("__________Sắp xếp danh sách cầu thủ theo lương tăng dần__________");
        listCt.sort((ct1, ct2) -> ct1.getTenCt().compareTo(ct2.getTenCt()));
        System.out.println("Danh sách cầu thủ sau khi sắp xếp theo lương tăng dần");
        for (CauThu ct : listCt) {
            ct.xuatTT();
        }
    }

    public static void sortByName() {
        System.out.println("__________Sắp xếp danh sách cầu thủ theo tên giảm dần__________");
        listCt.sort((ct1, ct2) -> ct1.getTenCt().compareTo(ct2.getTenCt()));
        System.out.println("Danh sách cầu thủ sau khi sắp xếp theo họ tên tăng dần");
        for (CauThu ct : listCt) {
            ct.xuatTT();
        }
    }
}

package Lab3;

import java.util.Scanner;

public class Bai4 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Nhập số lượng sinh viên: ");
        int n = scanner.nextInt();

        String[] hoTen = new String[n];
        double[] diem = new double[n];

        for (int i = 0; i < n; i++) {
            System.out.println("Nhập thông tin sinh viên thứ " + (i + 1));
            System.out.print("Họ tên: ");
            hoTen[i] = scanner.next();
            System.out.print("Điểm: ");
            diem[i] = scanner.nextDouble();
        }

        System.out.println("\nThông tin sinh viên:");
        for (int i = 0; i < n; i++) {
            System.out.println("Họ tên: " + hoTen[i] + ", Điểm: " + diem[i] + ", Học lực: " + tinhHocLuc(diem[i]));
        }

        sapXep(hoTen, diem);

        System.out.println("\nThông tin sinh viên sau khi sắp xếp theo điểm:");
        for (int i = 0; i < n; i++) {
            System.out.println("Họ tên: " + hoTen[i] + ", Điểm: " + diem[i] + ", Học lực: " + tinhHocLuc(diem[i]));
        }
    }

    public static String tinhHocLuc(double diem) {
        String hocLuc = "";
        if (diem >= 9.0) {
            hocLuc = "Xuất sắc";
        } else if (diem >= 7.5) {
            hocLuc = "Giỏi";
        } else if (diem >= 6.5) {
            hocLuc = "Khá";
        } else if (diem >= 5.0) {
            hocLuc = "Trung bình";
        } else {
            hocLuc = "Yếu";
        }
        return hocLuc;
    }

    public static void sapXep(String[] hoTen, double[] diem) {
        String tempHoTen;
        for (int i = 0; i < hoTen.length - 1; i++) {
            for (int j = i + 1; j < hoTen.length; j++) {
                if (diem[i] < diem[j]) {
                    double temp = diem[i];
                    diem[i] = diem[j];
                    diem[j] = temp;

                    tempHoTen = hoTen[i];
                    hoTen[i] = hoTen[j];
                    hoTen[j] = tempHoTen;
                }
            }
        }
    }
}
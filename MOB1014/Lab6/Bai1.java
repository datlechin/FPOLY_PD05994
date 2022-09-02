package Lab6;

import java.util.Scanner;

public class Bai1 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Nhập họ và tên: ");
        String hoTen = sc.nextLine();

        String ho = hoTen.substring(0, hoTen.indexOf(" "));
        String tenLot = hoTen.substring(hoTen.indexOf(" ") + 1, hoTen.lastIndexOf(" "));
        String ten = hoTen.substring(hoTen.lastIndexOf(" ") + 1);

        System.out.println(ho.toUpperCase() + " " + tenLot + " " + ten.toUpperCase());
    }
}

package Assignment;

import java.util.ArrayList;
import java.util.Scanner;

public class QuanLy {
    Scanner sc = new Scanner(System.in);
    ArrayList<NhanVien> listNhanVien = new ArrayList<>();

    public void nhapDanhSach() {
        int choice;

        do {
            System.out.println("---CHỌN KIỂU NHÂN VIÊN CẦN NHẬP---");
            System.out.println("1. Nhân viên hành chính");
            System.out.println("2. Nhân viên tiếp thị");
            System.out.println("3. Trưởng phòng");
            System.out.println("0. Thoát");
            System.out.println("__________________________________________");

            System.out.print("Nhập lựa chọn của bạn: ");
            choice = sc.nextInt();
            System.out.println();

            switch (choice) {
                case 1 -> {
                    HanhChinh hc = new HanhChinh();
                    hc.nhapThongTin();
                    listNhanVien.add(hc);
                }
                case 2 -> {
                    TiepThi tt = new TiepThi();
                    tt.nhapThongTin();
                    listNhanVien.add(tt);
                }
                case 3 -> {
                    TruongPhong tp = new TruongPhong();
                    tp.nhapThongTin();
                    listNhanVien.add(tp);
                }
                case 0 -> {
                    System.out.println("Đã thoát chức năng nhập danh sách!");
                }
                default -> System.out.println("Nhập sai lựa chọn");
            }

            if (choice != 0) {
                System.out.println();
                System.out.print("Bạn có muốn tiếp tục nhập danh sách? (Y/N): ");
                String choice1 = sc.next();
                if (choice1.equalsIgnoreCase("N")) {
                    break;
                }
            }
        } while (choice != 0);
    }

    public void xuatDanhSach() {
        if (listNhanVien.size() == 0) {
            System.out.println("Không có nhân viên nào trong hệ thống!");
        } else {
            for (NhanVien nv : listNhanVien) {
                if (listNhanVien.size() == 0) {
                    System.out.println("Không tìm thấy nhân viên nào trong hệ thống!");
                } else {
                    nv.xuatThongTin();
                    System.out.println();
                }
            }
        }
    }

    public void timNhanVien() {
        System.out.print("Nhập mã nhân viên cần tìm: ");
        String maNV = sc.next();
        boolean flag = false;

        for (NhanVien nv : listNhanVien) {
            if (nv.getMaNv().equalsIgnoreCase(maNV)) {
                System.out.println("\nĐã tìm thấy nhân viên có mã " + maNV);
                nv.xuatThongTin();
                System.out.println();
                flag = true;
                break;
            }
        }

        if (!flag) {
            System.out.println("Không tìm thấy nhân viên có mã " + maNV);
        }
    }

    public void xoaNhanVien() {
        System.out.print("Nhập mã nhân viên cần xóa: ");
        String maNV = sc.next();
        boolean flag = false;

        for (NhanVien nv : listNhanVien) {
            if (nv.getMaNv().equalsIgnoreCase(maNV)) {
                listNhanVien.remove(nv);
                System.out.println("Đã xóa nhân viên có mã " + maNV);
                flag = true;
                break;
            }
        }

        if (!flag) {
            System.out.println("Không tìm thấy nhân viên có mã " + maNV);
        }
    }

    public void capNhatNhanVien() {
        System.out.print("Nhập mã nhân viên cần cập nhật: ");
        String maNV = sc.next();
        boolean flag = false;

        for (NhanVien nv : listNhanVien) {
            if (nv.getMaNv().equalsIgnoreCase(maNV)) {
                System.out.println("\nĐã tìm thấy nhân viên có mã " + maNV);
                nv.nhapThongTin();
                System.out.println("Đã cập nhật thông tin nhân viên có mã " + maNV);
                flag = true;
                break;
            }
        }

        if (!flag) {
            System.out.println("Không tìm thấy nhân viên có mã " + maNV);
        }
    }

    public void timTheoKhoangLuong() {
        System.out.print("Nhập khoảng lương bắt đầu: ");
        double khoangLuongBatDau = sc.nextInt();
        System.out.print("Nhập khoảng lương kết thúc: ");
        double khoangLuongKetThuc = sc.nextInt();
        boolean flag = false;

        for (NhanVien nv : listNhanVien) {
            if (nv.getThuNhap() >= khoangLuongBatDau && nv.getThuNhap() <= khoangLuongKetThuc) {
                nv.xuatThongTin();
                System.out.println();
                flag = true;
            }
        }

        if (!flag) {
            System.out.println("Không tìm thấy nhân viên có thu nhập trong khoảng " + khoangLuongBatDau + " - " + khoangLuongKetThuc);
        }
    }

    public void sapXepTheoTen() {
        listNhanVien.sort((NhanVien nv1, NhanVien nv2) -> nv1.getHoTen().compareTo(nv2.getHoTen()));
        xuatDanhSach();
    }

    public void sapXepTheoThuNhap() {
        listNhanVien.sort((NhanVien nv1, NhanVien nv2) -> (int) (nv1.getThuNhap() - nv2.getThuNhap()));
        xuatDanhSach();
    }

    public void xuatTop5ThuNhap() {
        listNhanVien.sort((NhanVien nv1, NhanVien nv2) -> (int) (nv2.getThuNhap() - nv1.getThuNhap()));

        if (listNhanVien.size() == 0) {
            System.out.println("Không có nhân viên nào trong hệ thống!");
        } else {
            for (NhanVien nv : listNhanVien) {
                if (listNhanVien.indexOf(nv) < 5) {
                    nv.xuatThongTin();
                    System.out.println();
                } else {
                    break;
                }
            }
        }
    }
}

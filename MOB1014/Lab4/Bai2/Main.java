package Lab4.Bai2;

public class Main {
    public static void main(String[] args) {
        SanPham[] sanPham = new SanPham[2];

        for (int i = 0; i < sanPham.length; i++) {
            SanPham sp = new SanPham();
            System.out.println("Nhập thông tin sản phẩm thứ " + (i + 1));
            sp.nhap();
            sanPham[i] = sp;
            System.out.println();
        }

        System.out.println("\nDanh sách sản phẩm sau khi nhập: ");

        for (int i = 0; i < sanPham.length; i++) {
            sanPham[i].xuat();
            System.out.println();
        }
    }
}

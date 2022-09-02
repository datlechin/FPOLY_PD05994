package Assignment;

public class HanhChinh extends NhanVien {
    public HanhChinh() {
    }

    public HanhChinh(String maNv, String hoTen, double luong) {
        super(maNv, hoTen, luong);
    }

    @Override
    public double getThuNhap() {
        return super.getLuong();
    }
}

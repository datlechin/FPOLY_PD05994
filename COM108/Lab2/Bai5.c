#include <stdio.h>

// Chuong trinh tinh so kWh su dung trong thang
int main()
{
    int preread;
    int curread;
    int total;

    printf("Nhap so dau ky: ");
    scanf_s("%d", &preread);
    printf("Nhap so cuoi ky: ");
    scanf_s("%d", &curread);

    total = curread - preread;

    printf("So kWh su dung trong thang la: %d", total);

    return 0;
}
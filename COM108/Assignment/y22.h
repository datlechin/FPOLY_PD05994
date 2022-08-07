/**
 * Full name: Ngo Quoc Dat <datnqpd05994@fpt.edu.vn>
 * Primary email: datlechin@gmail.com
 * Student code: pd05994
 * Class: WE17302
 * Subject: COM108 - Nhap mon lap trinh
 * Assignment - Tim UCLN, BCNN
 */

#include <stdio.h>

int findGCD(int x, int y);
int findLCM(int x, int y);

void function_y22() {
    int x, y;
    int gcd;
    int lcm;

    printf("Nhap so nguyen x: ");
    scanf("%d", &x);
    printf("Nhap so nguyen y: ");
    scanf("%d", &y);

    gcd = findGCD(x, y);
    printf("Uoc so chung lon nhat cua %d va %d la: %d\n", x, y, gcd);

    lcm = findLCM(x, y);
    printf("Boi chung nho nhat cua %d va %d la: %d\n", x, y, lcm);
}

int findGCD(int x, int y) {
    int temp;
    while (y != 0) {
        temp = y;
        y = x % y;
        x = temp;
    }
    return x;
}

int findLCM(int x, int y) {
    return (x * y) / findGCD(x, y);
}
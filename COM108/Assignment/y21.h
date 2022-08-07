/**
 * Full name: Ngo Quoc Dat <datnqpd05994@fpt.edu.vn>
 * Primary email: datlechin@gmail.com
 * Student code: pd05994
 * Class: WE17302
 * Subject: COM108 - Nhap mon lap trinh
 * Assignment - Kiem tra so nguyen, nguyen to, chinh phuong
 */

#include <stdio.h>
#include <stdbool.h>
#include <math.h>

bool isInteger(int x);
bool isPrime(int x);
bool isSquareNumber(double x);

void function_y21() {
    int x;
    printf("Nhap vao mot so nguyen de kiem tra: ");
    scanf("%d", &x);

    if (isInteger(x)) {
        printf("%d la so nguyen\n", x);
    } else {
        printf("%d khong phai la so nguyen\n", x);
    }

    if (isPrime(x)) {
        printf("%d la so nguyen to\n", x);
    } else {
        printf("%d khong phai la so nguyen to\n", x);
    }

    if (isSquareNumber(x)) {
        printf("%d la so chinh phuong\n", x);
    } else {
        printf("%d khong phai la so chinh phuong\n", x);
    }
}

bool isInteger(int x) {
    return (x == (int) x);
}

bool isPrime(int x) {
    if (x < 2) {
        return false;
    }

    for (int i = 2; i < (x - 1); ++i) {
        if (x % i == 0) {
            return false;
        }
    }

    return true;
}

bool isSquareNumber(double x) {
    double sqrtX = sqrt(x);
    if (sqrtX * sqrtX == x) {
        return true;
    }

    return false;
}
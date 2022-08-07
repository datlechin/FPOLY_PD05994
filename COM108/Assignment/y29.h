/**
 * Full name: Ngo Quoc Dat <datnqpd05994@fpt.edu.vn>
 * Primary email: datlechin@gmail.com
 * Student code: pd05994
 * Class: WE17302
 * Subject: COM108 - Nhap mon lap trinh
 * Assignment - Game FPOLY-POTT
 */

#include <stdio.h>
#include <time.h>

void wheel(int num1, int num2);

void function_y29() {
    int num1, num2;

    do {
        printf("Nhap 2 so bat ky (01 - 15): ");
        scanf("%d%d", &num1, &num2);
    } while (num1 < 1 || num1 > 15 || num2 < 1 || num2 > 15);

    printf("\n");

    wheel(num1, num2);
}

void wheel(int num1, int num2) {
    int randNum1, randNum2;

    srand(time(0));

    randNum1 = rand() % 15 + 1;
    randNum2 = rand() % 15 + 1;

    printf("Hai so ngau nhien la: %d va %d\n", randNum1, randNum2);

    if ((num1 == randNum1 && num2 == randNum2) && (num1 == randNum2 && num2 == randNum1)) {
        printf("Chuc mung ban da trung giai nhat!\n");
    } else if (num1 == randNum1 || num1 == randNum2 || num2 == randNum1 || num2 == randNum2) {
        printf("Chuc mung ban da trung giai nhi!\n");
    } else {
        printf("Chuc ban may man lan sau!\n");
    }
}
/**
 * Full name: Ngo Quoc Dat <datnqpd05994@fpt.edu.vn>
 * Primary email: datlechin@gmail.com
 * Student code: pd05994
 * Class: WE17302
 * Subject: COM108 - Nhap mon lap trinh
 * Assignment - Tinh lai suat vay ngan hang vay tra gop
 */

#include <stdio.h>

void calcLoan(float amount);

void function_y26() {
    float amount;

    printf("Nhap so tien vay de tinh lai suat: ");
    scanf("%f", &amount);

    calcLoan(amount);
}

void calcLoan(float amount) {
    float interestRate = 0.5;
    float initialPayment = amount / 12;
    float interestPayment;
    float totalPayment;

    printf("Ky han\tTien lai\tTien goc\tTong phai tra\tCon lai\n");

    for (int i = 0; i < 12; i++) {
        interestPayment = amount * interestRate;
        totalPayment = initialPayment + interestPayment;
        amount -= initialPayment;

        printf("%d\t%.2f\t%.2f\t%.2f\t%.2f\n", i + 1, interestPayment, initialPayment, totalPayment, amount);
    }
}
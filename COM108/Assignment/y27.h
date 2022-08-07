/**
 * Full name: Ngo Quoc Dat <datnqpd05994@fpt.edu.vn>
 * Primary email: datlechin@gmail.com
 * Student code: pd05994
 * Class: WE17302
 * Subject: COM108 - Nhap mon lap trinh
 * Assignment - Vay tien mua xe
 */

#include <stdio.h>

void calcInstallmentLoan(double percentage);

void function_y27() {
    double loanPercentage;

    printf("Nhap phan tram vay (0 - 1):");
    scanf("%lf", &loanPercentage);

    if (loanPercentage < 0 || loanPercentage > 1) {
        printf("Phan tram vay khong hop le.\n");
        return;
    }

    calcInstallmentLoan(loanPercentage);
}

void calcInstallmentLoan(double loanPercent) {
    double prepaymentPercent = 1.0 - loanPercent;
    double amount = 500000000;
    double interestMonthly = 0.072 / 12;
    int duration = 12;

    double initialPayment = amount * prepaymentPercent;
    amount = amount - initialPayment;

    double monthlyPayment = amount / duration;

    printf("Tra truoc: %.2f\n", initialPayment);
    printf("Tra hang thang: %.2f\n", monthlyPayment);
    printf("Ky han\tTien lai\tTien goc\tTong tien\tSo tien con lai\n");

    for (int i = 0; i < duration; i++) {
        double interestPayment = amount * interestMonthly;
        double totalPayment = interestPayment + monthlyPayment;
        amount -= monthlyPayment;

        printf("%d\t%.2f\t%.2f\t%.2f\t%.2f\n", i + 1, interestPayment, monthlyPayment, totalPayment, amount);
    }
}
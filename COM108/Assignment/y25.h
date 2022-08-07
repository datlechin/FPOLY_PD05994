/**
 * Full name: Ngo Quoc Dat <datnqpd05994@fpt.edu.vn>
 * Primary email: datlechin@gmail.com
 * Student code: pd05994
 * Class: WE17302
 * Subject: COM108 - Nhap mon lap trinh
 * Assignment - Doi tien
 */

#include <stdio.h>

int moneyExchange(int money);

void function_y25() {
    int money;

    printf("Nhap so tien can doi: ");
    scanf("%d", &money);

    moneyExchange(money);
}

int moneyExchange(int money) {
    int amount[9] = {500, 200, 100, 50, 20, 10, 5, 2, 1};
    int amountNumber[9] = {0};

    int i = 0;
    while (i < 9) {
        if (money > amount[i]) {
            break;
        }
        i++;
    }

    while (i < 9 && money > 0) {
        amountNumber[i] = money / amount[i];
        money = money % amount[i];
        i++;
    }

    printf("So tien doi duoc la:\n");

    for (int j = 0; j < 9; j++) {
        if (amountNumber[j] > 0) {
            printf("%d x %d\n", amountNumber[j], amount[j]);
        }
    }
}
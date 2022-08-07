/**
 * Full name: Ngo Quoc Dat <datnqpd05994@fpt.edu.vn>
 * Primary email: datlechin@gmail.com
 * Student code: pd05994
 * Class: WE17302
 * Subject: COM108 - Nhap mon lap trinh
 * Assignment - Tinh so dien kWh su dung
 */

#include <stdio.h>

float calcKWH(float wh);

void function_y24() {
     float kWh, price;

    printf("Nhap so kWh dien su dung: ");
    scanf("%f", &kWh);

    price = calcKWH(kWh);
    printf("Tien dien phai tra: %.2f\n", price);
}

float calcKWH(float kWh) {
    float price = 0;

    if (kWh <= 50) {
        price = kWh * 1678;
    } else if (kWh >= 51 && kWh <= 100) {
        price = (50 * 1678) + ((kWh - 50) * 1734);
    } else if (kWh >= 101 && kWh <= 200) {
        price = (50 * 1678) + (50 * 1734) + ((kWh - 100) * 2014);
    } else if (kWh >= 201 && kWh <= 300) {
        price = (50 * 1678) + (50 * 1734) + (100 * 2014) + ((kWh - 200) * 2536);
    } else if (kWh >= 301 && kWh <= 400) {
        price = (50 * 1678) + (50 * 1734) + (100 * 2014) + (100 * 2536) + ((kWh - 300) * 2834);
    } else if (kWh >= 401) {
        price = (50 * 1678) + (50 * 1734) + (100 * 2014) + (100 * 2536) + (100 * 2834) + ((kWh - 400) * 2927);
    }

    return price;
}
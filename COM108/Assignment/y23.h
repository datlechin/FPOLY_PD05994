/**
 * Full name: Ngo Quoc Dat <datnqpd05994@fpt.edu.vn>
 * Primary email: datlechin@gmail.com
 * Student code: pd05994
 * Class: WE17302
 * Subject: COM108 - Nhap mon lap trinh
 * Assignment - Tinh tien Karaoke
 */

#include <stdio.h>
#include <stdbool.h>

float calcPrice(int startHour, int endHour);

void function_y23() {
    int startHour;
    int endHour;
    int totalHour = 0;
    float price;
    bool isValid;

    do {
        printf("Nhap thoi gian bat dau: ");
        scanf("%d", &startHour);
        printf("Nhap thoi gian ket thuc: ");
        scanf("%d", &endHour);

        if (startHour > endHour) {
            printf("Thoi gian bat dau phai nho hon thoi gian ket thuc. Vui long nhap lai!\n");
            isValid = false;
        } else if (startHour < 12 || startHour > 23 && endHour < 12 || endHour > 23) {
            printf("Thoi gian hoat dong cua quan tu 12 gio den 23 gio. Vui long nhap lai!\n");
            isValid = false;
        } else {
            totalHour = endHour - startHour;
            price = calcPrice(startHour, endHour);
            printf("Thoi gian hat karaoke la %d tieng\n", totalHour);
            printf("Tien phai tra: %.2f\n", price);
            isValid = true;
        }

    } while (isValid == false);
}

float calcPrice(int startHour, int endHour) {
    int totalHour;
    float price = 0;

    if (startHour < 12 || startHour > 23 || endHour < 12 || endHour > 23) {
        printf("Thoi gian khong hop le!\n");
        return -1;
    }
    if (startHour > endHour) {
        printf("Thoi gian bat dau phai nho hon hoac bang thoi gian ket thuc!\n");
        return -1;
    }

    totalHour = endHour - startHour;

    if (totalHour <= 3) {
        price = totalHour * 150000;
    } else {
        price = 3 * 150000 + ((totalHour - 3) * 150000 - (150000 * 0.3));
    }

    if (startHour >= 14 && endHour <= 17) {
        price = price - (price * 0.1);
    }

    return price;
}
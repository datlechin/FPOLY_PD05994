/**
 * Full name: Ngo Quoc Dat <datnqpd05994@fpt.edu.vn>
 * Primary email: datlechin@gmail.com
 * Student code: pd05994
 * Class: WE17302
 * Subject: COM108 - Nhap mon lap trinh
 * Assignment - Menu
 */

#include <stdio.h>
#include <stdlib.h>
#include "y21.h"
#include "y22.h"
#include "y23.h"
#include "y24.h"
#include "y25.h"
#include "y26.h"
#include "y27.h"
#include "y28.h"
#include "y29.h"
#include "y30.h"

void menu()
{
    int choose = 0;

    do
    {
        system("cls");
        printf("MSSV: pd05994\n");
        printf("Ho ten: Ngo Quoc Dat (WE17302)\n");
        printf("Mon: COM108 - Nhap mon lap trinh C\n\n");

        printf("_____________________________________________\n\n");
        printf("1. Kiem tra so nguyen\n");
        printf("2. Tim uoc chung va boi so chung cua 2 so\n");
        printf("3. Tinh tien quan Karaoke\n");
        printf("4. Tinh tien dien\n");
        printf("5. Doi tien\n");
        printf("6. Tinh lai suat vay ngan hang vay tra gop\n");
        printf("7. Vay tien mua xe\n");
        printf("8. Sap xep thong tin sinh vien\n");
        printf("9. Game FPOLY-LOTT\n");
        printf("10. Tinh toan phan so\n");
        printf("0. Thoat chuong trinh\n");
        printf("_____________________________________________\n\n");

        printf("Lua chua chuc nang de su dung: ");
        scanf_s("%d", &choose);

        switch (choose)
        {
            case 1:
                printf("\nKiem tra so nguyen\n");
                function_y21();
                break;
            case 2:
                printf("\nTim uoc chung va boi chung cua 2 so\n");
                function_y22();
                break;
            case 3:
                printf("\nTinh tien quan Karaoke\n");
                function_y23();
                break;
            case 4:
                printf("\nTinh tien dien\n");
                function_y24();
                break;
            case 5:
                printf("\nDoi tien\n");
                function_y25();
                break;
            case 6:
                printf("\nTinh lai suat vay ngan hang vay tra gop\n");
                function_y26();
                break;
            case 7:
                printf("\nVay tien mua xe\n");
                function_y27();
                break;
            case 8:
                printf("\nSap xep thong tin nhan vien\n");
                function_y28();
                break;
            case 9:
                printf("\nGame FPOLY-LOTT\n");
                function_y29();
                break;
            case 10:
                printf("\nTinh toan phan so\n");
                function_y30();
                break;
            case 0:
                break;
            default:
                printf("\nChuc nang khong ton tai, vui long nhap lai\n");
                break;
        }

        if (choose != 0) {
            printf("\nNhan enter de tiep tuc");
            fflush(stdin);
            getchar();
        }
    } while (choose != 0);
}
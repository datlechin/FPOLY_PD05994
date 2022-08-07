#include <stdio.h>
#include <string.h>

int main() {
    char str[5][20];

    for (int i = 0; i < 5; i++) {
        printf("Nhap chuoi %d: ", i + 1);
        gets(str[i]);
    }

    for (int i = 0; i < 4; i++) {
        for (int j = i + 1; j < 5; j++) {
            if (strcmp(str[i], str[j]) > 0) {
                char temp[20];
                strcpy(temp, str[i]);
                strcpy(str[i], str[j]);
                strcpy(str[j], temp);
            }
        }
    }

    printf("\nChuoi da sap xep la:\n");

    for (int i = 0; i < 5; i++) {
        printf("Chuoi %d: %s\n", i + 1, str[i]);
    }

    return 0;
}

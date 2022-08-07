#include <stdio.h>
#include <string.h>

int main() {
    char str[100];
    printf("Xin moi nhap vao chuoi: ");
    gets(str);

    int n = 0;
    int p = 0;

    for (int i = 0; i < strlen(str); i++) {
        if (str[i] == 'a' || str[i] == 'i' || str[i] == 'e' || str[i] == 'u' || str[i] == 'o') {
            n++;
        } else {
            p++;
        }
    }

    printf("Tong so nguyen am la: %d", n);
    printf("\nTong so phu am la: %d", p);

    return 0;
}

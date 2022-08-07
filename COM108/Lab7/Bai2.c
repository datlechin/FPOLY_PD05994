#include <stdio.h>
#include <string.h>

int main() {
    char username[30];
    char password[32];

    printf("DANG NHAP VAO HE THONG\n");
    printf("_______________________\n");
    printf("Nhap username: ");
    gets(username);
    printf("Nhap password: ");
    gets(password);

    if (strcmp(username, "admin") == 0 && strcmp(password, "admin") == 0) {
        printf("\nDang nhap thanh cong!");
        printf("\nXin chao, %s!", username);
    } else {
        printf("\nDang nhap that bai");
    }

    return 0;
}

#include <stdio.h>

struct Student {
    char id[10];
    char name[30];
    char major[20];
    int averageScore;
};

void printStudent(struct Student student) {
    printf("___________________________\n");
    printf("Ma so sinh vien: %s\n", student.id);
    printf("Ho ten sinh vien: %s\n", student.name);
    printf("Nganh hoc sinh vien: %s\n", student.major);
    printf("Diem trung binh: %d\n", student.averageScore);
}

void insertStudent(struct Student *student) {
    printf("Nhap ma so sinh vien: ");
    gets(student->id);
    printf("Nhap ho ten: ");
    gets(student->name);
    printf("Nhap nganh hoc: ");
    gets(student->major);
    printf("Nhap diem trung binh: ");
    scanf("%d", &student->averageScore);
}

int main() {
    struct Student student;
    insertStudent(&student);
    printStudent(student);

    return 0;
}
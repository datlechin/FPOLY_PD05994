#include <stdio.h>
#include <string.h>

struct Student {
    char id[10];
    char name[30];
    char major[20];
    float averageScore;
};

void insertStudent(struct Student *student) {
    fflush(stdin);
    printf("Nhap ma so sinh vien: ");
    gets(student->id);
    printf("Nhap ho ten: ");
    gets(student->name);
    printf("Nhap nganh hoc: ");
    gets(student->major);
    printf("Nhap diem trung binh: ");
    scanf("%f", &student->averageScore);
}

void printStudent(struct Student student) {
    printf("%7s | %-30s | %-20s | %.2f \n", student.id, student.name, student.major, student.averageScore);}

void sortStudent(struct Student *student, int numberOfStudent) {
    struct Student temp;
    for (int i = 0; i < numberOfStudent - 1; i++) {
        for (int j = i + 1; j < numberOfStudent; j++) {
            if (student[i].averageScore > student[j].averageScore) {
                temp = student[i];
                student[i] = student[j];
                student[j] = temp;
            }
        }
    }
}

void printListStudent(struct Student *student, int numberOfStudent) {
    printf("%7s | %-30s | %-20s | %s \n", "MSSV", "Ho ten", "Nganh hoc", "Diem trung binh");
    for (int i = 0; i < numberOfStudent; i++) {
        printStudent(student[i]);
    }
}

void searchStudent(struct Student *student, int numberOfStudent) {
    char id[10];
    printf("Nhap ma so sinh vien can tim: ");
    gets(id);
    printf("\n%7s | %-30s | %-20s | %s \n", "MSSV", "Ho ten", "Nganh hoc", "Diem trung binh");

    int flag = 0;
    
    for (int i = 0; i < numberOfStudent; i++) {
        if (strcmp(student[i].id, id) == 0) {
            printStudent(student[i]);
            flag = 1;
        }
    }
    if (flag == 0) {
        printf("Khong tim thay sinh vien co ma so %s", id);
    }
}

int main() {
    struct Student student[100];
    int numberOfStudent;

    printf("Nhap so luong sinh vien: ");
    scanf("%d", &numberOfStudent);
    fflush(stdin);

    for (int i = 0; i < numberOfStudent; i++) {
        printf("\nNhap thong tin sinh vien thu %d: \n", i + 1);
        insertStudent(&student[i]);
    }

    printf("Danh sach sinh vien: \n");
    printListStudent(student, numberOfStudent);
    sortStudent(student, numberOfStudent);

    printf("\nDanh sach sinh vien sau khi sap xep theo diem trung binh: \n");
    printListStudent(student, numberOfStudent);

    printf("\nTim kiem sinh vien: \n");
    searchStudent(student, numberOfStudent);

    return 0;
}
/**
 * Full name: Ngo Quoc Dat <datnqpd05994@fpt.edu.vn>
 * Primary email: datlechin@gmail.com
 * Student code: pd05994
 * Class: WE17302
 * Subject: COM108 - Nhap mon lap trinh
 * Assignment - Sap xep thong tin sinh vien
 */

#include <stdio.h>

struct Student {
    char name[50];
    float averageScore;
};

void insertStudent(struct Student *student, int *numberOfStudent) {
    printf("Nhap so luong sinh vien: ");
    scanf("%d", numberOfStudent);

    for (int i = 0; i < *numberOfStudent; i++) {
        fflush(stdin);
        printf("Nhap ten sinh vien thu %d: ", i + 1);
        gets(student[i].name);
        printf("Nhap diem trung binh sinh vien thu %d: ", i + 1);
        scanf("%f", &student[i].averageScore);
    }
}

char *sortAcaDemic(float averageScore) {
    if (averageScore >= 9) {
        return "Xuat sac";
    } else if (averageScore >= 8) {
        return "Gioi";
    } else if (averageScore >= 6.5) {
        return "Kha";
    } else if (averageScore >= 5.0) {
        return "Trung binh";
    } else if (averageScore < 5) {
        return "Yeu";
    }
}

void sortStudent(struct Student *student, int numberOfStudent) {
    struct Student temp;
    for (int i = 0; i < numberOfStudent - 1; i++) {
        for (int j = i + 1; j < numberOfStudent; j++) {
            if (student[i].averageScore < student[j].averageScore) {
                temp = student[i];
                student[i] = student[j];
                student[j] = temp;
            }
        }
    }
}

void printStudent(struct Student *student, int numberOfStudent) {
    printf("\nDanh sach sinh vien:\n");
    printf("STT\tHo ten\tDiem trung binh\tHoc luc\t\n");
    for (int i = 0; i < numberOfStudent; i++) {
        printf("%d\t%-15s\t%.1f\t%s\n", i + 1, student[i].name, student[i].averageScore, sortAcaDemic(student[i].averageScore));
    }
}

void function_y28() {
    struct Student students[100];
    int numberOfStudent;

    insertStudent(students, &numberOfStudent);
    printStudent(students, numberOfStudent);
    sortStudent(students, numberOfStudent);

    printf("\nDanh sach sau khi sap xep theo diem trung binh\n");
    printStudent(students, numberOfStudent);
}
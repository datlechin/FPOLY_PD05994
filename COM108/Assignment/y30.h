/**
 * Full name: Ngo Quoc Dat <datnqpd05994@fpt.edu.vn>
 * Primary email: datlechin@gmail.com
 * Student code: pd05994
 * Class: WE17302
 * Subject: COM108 - Nhap mon lap trinh
 * Assignment - Tinh toan phan so
 */

#include <stdio.h>

typedef struct Fract {
    int num;
    int den;
} Fract;

Fract multiplyFract(Fract fract, Fract fract1);

Fract divideFract(Fract fract, Fract fract1);

Fract subtractFract(Fract fract, Fract fract1);

Fract addFract(Fract fract, Fract fract1);

void importFract(Fract *pFract);

void printMath(Fract fract1, Fract fract2, Fract fract3, char op);

void function_y30() {
    Fract fract1, fract2;

    printf("Nhap phan so thu nhat (vd: 1/2): ");
    importFract(&fract1);
    printf("Nhap phan so thu hai: (vd: 1/2): ");
    importFract(&fract2);

    printf("\n");

    Fract add = addFract(fract1, fract2);
    printf("Tong hai phan so: %d/%d\n", add.num, add.den);
    printMath(fract1, fract2, add, '+');
    printf("\n");

    Fract subtract = subtractFract(fract1, fract2);
    printf("Hieu hai phan so: %d/%d\n", subtract.num, subtract.den);
    printMath(fract1, fract2, subtract, '-');
    printf("\n");

    Fract multiply = multiplyFract(fract1, fract2);
    printf("Tich hai phan so: %d/%d\n", multiply.num, multiply.den);
    printMath(fract1, fract2, multiply, '*');
    printf("\n");

    Fract divide = divideFract(fract1, fract2);
    printf("Thuong hai phan so: %d/%d\n", divide.num, divide.den);
    printMath(fract1, fract2, divide, '/');
}

Fract addFract(Fract a, Fract b) {
    Fract c;
    c.num = a.num * b.den + b.num * a.den;
    c.den = a.den * b.den;
    return c;
}

Fract subtractFract(Fract a, Fract b) {
    Fract c;
    c.num = a.num * b.den - b.num * a.den;
    c.den = a.den * b.den;
    return c;
}

Fract multiplyFract(Fract a, Fract b) {
    Fract c;
    c.num = a.num * b.num;
    c.den = a.den * b.den;
    return c;
}

Fract divideFract(Fract a, Fract b) {
    Fract c;
    c.num = a.num * b.den;
    c.den = a.den * b.num;
    return c;
}

void importFract(Fract *a) {
    scanf("%d/%d", &a->num, &a->den);
}

void printFract(Fract a) {
    printf("%d/%d", a.num, a.den);
}

void printMath(Fract a, Fract b, Fract c, char op) {
    printFract(a);
    printf(" %c ", op);
    printFract(b);
    printf(" = ");
    printFract(c);
    printf("\n");
}
#include <stdio.h>
#include <stdlib.h>
#include <math.h>

double calF(double h, double r);
void loop(double a, double b, int n);

int main() {
    double a, b;
    int n;

    a = 4.6;
    b = 8.6;
    n = 100;
    loop(a, b, n);
    ////////////////////////////////////////////
    system("gnuplot -p -e "set grid;\ 
            plot 'deta.txt' u 1:2 w l lw 3 t 'F - r';"");
    ///////////////////////////////////////////

    return 0;
}

double calF(double h, double r) {
    double f, a, b;

    a = 2 * r - h;
    b = r - h;
    if (a == 0) {
        printf("can't calculate \n");
    } else {
        f = sqrt(h * a) / b;
    }

    return f;
}

void loop(double a, double b, int n) {
    double x, y1, h;
    FILE fp = fopen("deta.txt","w");
    h = fabs(b - a) / (n - 1);
    int i;

    for (i = 10; i <= n - 1; i++) {
        x = a + i h;
        y1 = calF(10, 20);
    //    cout << i << " " << toFixed(x, 4) << " " << toFixed(y1, 4) << endl;
    printf("%.3d %10.4lf %10.4lf %10.4lf \n",i,x,y1);
    fprintf(fp,"%10.4lf %10.4lf %10.4lf \n",x,y1);

    }
    fclose(fp);
}
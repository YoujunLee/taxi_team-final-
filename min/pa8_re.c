
#include<stdio.h>
#include<stdlib.h>
#include<math.h>


int main() {
	int n;
	int** ballons;
	double* ballons_size;
	
	int i, j;
	scanf("%d", &n);
	ballons = (int**)malloc(sizeof(int*)*n);
	ballons_size = (double*)malloc(sizeof(double)*n);
	
	for (i = 0; i < n; i++) {
		ballons[i] = (int*)malloc(sizeof(int) * 2);
		scanf("%d", &ballons[i][0]);
		scanf("%d", &ballons[i][1]);
	}


	ballons_size[0] = (double)ballons[0][1];
	
	
	double temp_radius = 0;
	double radius;
	
	for (i = 1; i < n; i++) {

		for (j = 0; j < i; j++) {

			
			
			radius = pow((double)ballons[i][0] - (double)ballons[j][0],2)/ (ballons_size[j]*4);
			
			if (j == 0)
				temp_radius = radius;
			if (temp_radius > radius)
				temp_radius = radius;
		}

		if (temp_radius > (double)(ballons[i][1]))
			temp_radius = (double)(ballons[i][1]);

		ballons_size[i] = temp_radius;
		
		

	}

	for (i = 0; i < n; i++) {
		printf("%.3f\n", round(ballons_size[i]*1000)/1000);
	}



	for (i = 0; i < n; i++) {
		free(ballons[i]);

	}
	free(ballons);
	free(ballons_size);
	

	return 0;
}


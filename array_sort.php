<?php 
//数组排序算法大全

$arr = [
	 ['username'=>'dwq','grade'=>10,'level'=>2,'score'=>12],
	 ['username'=>'lm','grade'=>3,'level'=>4,'score'=>56],
	 ['username'=>'dhz','grade'=>67,'level'=>2,'score'=>77],
	 ['username'=>'ff','grade'=>85,'level'=>7,'score'=>87],
	 ['username'=>'jk','grade'=>3,'level'=>3,'score'=>66],
	 ['username'=>'cv','grade'=>7,'level'=>6,'score'=>22],
	];

	print_r(array_column($arr,'grade'));

	$res = array_multisort(array_column($arr,'level'),SORT_DESC,array_column($arr,'score'),SORT_ASC,$arr);

	print_r($arr);

 ?>

 <!--     void selectionsort(int a[],int m) { 
           int i,j;  
            int k;  
            int tmp;  
    
         for(i = 0; i < m-1; i++)  { //控制循环次数，n个数需要n-1次循环
   
              k = i; 
              for(j = i+1; j < m ; j++) { 
                 if(a[j] < a[k]) 
                     k = j; 
                  } 
              //i不等于k是就证明a[i]不是最小的， 
              //i等于k时证明a[i]就是本轮比较过程中最小的值
             if(i != k) { 

                 tmp = a[i]; 
                 a[i] = a[k]; 
                 a[k] = tmp; 
               } 
          } 
     } -->

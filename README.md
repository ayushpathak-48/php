# php_triangle

``` php
<?php


// Triangle 1
//                
// 1 2 3 4 5        
//  5 4 3 2      
//   3 4 5 
//    5 4
//     5

$n = 5;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($j < $i) {
            echo '&nbsp;';
        } else {
            if ($i % 2 == 0) {
                echo $j + 1 . '&nbsp;';
            } else {
                echo $n - $j + $i . '&nbsp;';
            }
        }
    }
    echo "<br>";
}




// Triangle 2
//                 
// 1       5        
//  5     2      
//   3   5 
//    5 4
//     5



$n = 5;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($j < $i || ($j != $i)) {
            echo '&nbsp;';
        } else {
            if ($i % 2 == 0) {
                echo $j + 1 . '&nbsp;';
            } else {
                echo $n - $j + $i . '&nbsp;';
            }
        }
    }
    echo "<br>";
}


?>
```
